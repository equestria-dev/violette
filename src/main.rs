mod html;

use std::fs;
use std::io::prelude::*;
use std::path::Path;
use copy_dir::copy_dir;
use std::env::args_os;
use std::path::PathBuf;
use log::{error, info, LevelFilter, warn};
use simple_logger::SimpleLogger;

use serde::{Deserialize};
use crate::html::generate_template;

#[derive(Deserialize)]
struct PonyculeData {
    count: u32
}

fn main() {
    SimpleLogger::new().with_level(LevelFilter::Info).init().unwrap();
    let mut args = args_os();

    if args.len() != 2 {
        error!("Usage: {:?} <output path>", args.next().unwrap());
        return;
    }

    args.next();

    let output_path = PathBuf::from(args.next().unwrap());
    let mut output_assets_path = output_path.clone();
    let mut output_html_path = output_path.clone();
    let mut output_404_path = output_path.clone();
    let source_assets_path = PathBuf::from("assets");

    output_assets_path.push("assets");
    output_html_path.push("index.html");
    output_404_path.push("index.html");

    info!("Output directory: {:?}", output_path);

    info!("Fetching Ponycule for plural system information...");
    let data: PonyculeData = ureq::get("https://ponycule.p.equestria.dev/api/violette")
        .call().unwrap()
        .into_json().unwrap();
    info!("Request completed, found {} system members", data.count);

    if Path::new(&output_path).exists() {
        warn!("Found an older build, proceeding to delete it");
        fs::remove_dir_all(&output_path).expect("Failed to delete older build");
        info!("Deleted older build from {:?}", output_path);
    } else {
        info!("No older build found, continuing");
    }

    fs::create_dir(&output_path).expect("Failed to create output directory");
    info!("Created output directory at {:?}", output_path);

    copy_dir(&source_assets_path, &output_assets_path).expect("Failed to copy assets");
    info!("Copied assets to {:?}", output_assets_path);

    let markup = generate_template(data);

    let mut file1 = fs::File::create(&output_html_path).expect("Failed to create the index.html file");
    let mut file2 = fs::File::create(&output_404_path).expect("Failed to create the 404.html file");
    info!("Created HTML file {:?}", output_html_path);

    let html_str = markup.into_string();
    let html = html_str.as_ref();

    file1.write_all(html).expect("Failed to write to index.html file");
    info!("Rendered HTML to {:?}", output_html_path);

    file2.write_all(html).expect("Failed to write to 404.html file");
    info!("Copied as 404 handler {:?}", output_html_path);

    info!("All done, bye!");
}
