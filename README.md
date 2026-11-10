# HiSea Shipping

Rebuilt website for HiSea Shipping, Lahore, Pakistan — an international shipping and freight forwarding company.

Live preview: https://hisea-shipping.vercel.app/
Original site: https://hiseashipping.com/ (500 error at time of rebuild, November 2026)
Content recovered from the Wayback Machine snapshot of 19 January 2026, plus the About and Services pages.

## What is in this repo

- `index.html` — the 4-page static preview: Home, About Us (Mission and Vision merged in), Services, Contact. Same header and footer throughout.
- `wordpress/` — the clean WordPress build, Elementor free compatible:
  - `wordpress/hisea-shipping/` — the `hisea-shipping` theme (zip it to install)
  - `wordpress/import/hisea-shipping-pages.wxr` — WordPress page import (Home, About Us, Services, Contact)
  - `wordpress/pages/` — page content fallbacks in HTML
  - `wordpress/README.md` — full install guide

## Content, verified from the archive

- Head office: M2-14 Eden Tower, Main Boulevard Gulberg III, Lahore, Pakistan
- Phones: +92 321 449 9420 / 92-42-3578 2192-3
- Email: info@hiseashipping.com
- 8 services: Sea Freight, Air Freight, Land Freight, Warehousing (Karachi warehouse), Cargo Management / project cargo, Movers and Packers, Customs Clearance, Door to Door
- Testimonials: Babar Nawaz and Deep Sea Love, exact wording only
- Design: deep navy, sky blue and amber, Sora headings and Manrope body

## Binary assets — not in this repo

The stock photos and the self-hosted Sora/Manrope font files are binary, and this repo was pushed via the GitHub connector, which only handles text files. They are therefore not committed here:

- `index.html` references `assets/fonts/*.woff2` and `assets/images/*.jpg` — those files live in the Vercel deployment, not in this repo. Replace them with the company's real photos and logo before launch.
- The WordPress theme in `wordpress/hisea-shipping/` likewise has no font files committed. Download Sora and Manrope woff2 files into `assets/fonts/` when building the theme zip, or use the zip already built in the project workspace.
- The WordPress theme zip (`hisea-shipping.zip`, binary) is also not committed here.

## Important warning

The old site looks hacked before the 500 error: archived Services pages show casino/betting/escort spam links, and Wayback lists dozens of spam URLs on the domain from 2024–2025. Do not restore an old backup as is. Use a clean, fresh WordPress install and a security cleanup.

## WordPress install, in brief

Full steps in `wordpress/README.md`.

1. Fresh, clean WordPress install. Do not restore the old hacked install.
2. Upload and activate the `hisea-shipping` theme.
3. Optional: install Elementor free only (no Pro needed).
4. Import `wordpress/import/hisea-shipping-pages.wxr`, set Home as the front page, set the Main and Footer menus.
5. Add the logo when available, test the quote form to info@hiseashipping.com, check on mobile.

## Still missing

- Real logo — not recoverable from the archive; header uses a text logo for now.
- Real photos — stock placeholders were used in the preview.
- Exact Mission and Vision wording — not recoverable; the About page draft is marked for the friend to approve or rewrite.
- Social links / Google Maps link — none found in the archive.
