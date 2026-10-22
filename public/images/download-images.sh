#!/usr/bin/env bash
# Run this from the images/ folder: bash download-images.sh
# (Figma asset links expire ~7 days after generation.)
P="https://www.figma.com/api/mcp/asset/18baf22f-2744-46cd-838a-11f269afa29a"
curl -L "$P/0fe14.png" -o hero.png
curl -L "$P/eccf2.png" -o news-1.png
curl -L "$P/101d8.png" -o news-2.png
curl -L "$P/a3e2d.png" -o news-3.png
curl -L "$P/18c87.png" -o event-1.png
curl -L "$P/fd2b4.png" -o event-2.png
curl -L "$P/4291b.png" -o event-3.png
curl -L "$P/a055c.png" -o about.png
curl -L "$P/b5653.png" -o logo.png
curl -L "$P/aad39.png" -o logo-footer.png

# ---- About page images ----
P2="https://www.figma.com/api/mcp/asset/0c013c47-43f1-4adb-9e64-8aeb8e31cec9"
curl -L "$P2/f0d3c.png" -o about-hero.png
curl -L "$P2/758cb.png" -o who.png
curl -L "$P2/b1fe5.png" -o president.png
curl -L "$P2/20661.png" -o governance.png
curl -L "$P2/9acfd.png" -o secretariat.png
curl -L "$P2/32d9a.png" -o map.png
