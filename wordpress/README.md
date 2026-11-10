# HiSea Shipping — WordPress rebuild

Clean rebuild from scratch of hiseashipping.com, based only on content
recovered from the Wayback Machine snapshot of 19 January 2026 plus the
old About and Services pages. This is **not** a restore of the old site.

## What is in this folder

| File / folder | What it is |
|---|---|
| `hisea-shipping/` | The WordPress theme. Upload the zip, not this folder directly. |
| `hisea-shipping.zip` | The theme, zipped and ready to upload in WordPress: Appearance → Themes → Add New → Upload Theme. |
| `import/hisea-shipping-pages.wxr` | The 4 pages (Home, About Us, Services, Contact) as a WordPress import file. |
| `pages/home.html`, `pages/about.html`, `pages/services.html`, `pages/contact.html` | The same 4 pages as plain HTML, as a fallback. Use these if you rebuild a page in Elementor Free or Gutenberg instead of using the theme templates. |
| `README.md` | This guide. |

## The site, in short

- **4 pages, very short, same header and footer throughout:** Home, About Us (Mission and Vision merged into it), Services, Contact.
- **8 services:** Sea Freight, Air Freight, Land Freight, Warehousing, Cargo Management, Movers and Packers, Customs Clearance, Door to Door. Descriptions are the original descriptions from the old Services page.
- **Contact:** Head Office M2-14 Eden Tower, Main Boulevard Gulberg III, Lahore, Pakistan. Phones +92 321 449 9420 and 92-42-3578 2192-3. Email info@hiseashipping.com. Dedicated warehouse in Karachi.
- **Design:** deep navy (#08263f), sky blue (#0e7fb8), amber (#e8a33d). Headings in Sora ExtraBold, body in Manrope. Both fonts are self-hosted inside the theme (`hisea-shipping/assets/fonts/`), so the site makes no Google Fonts requests and the fonts work even if Google Fonts is blocked.
- **Testimonials, verified wording only:** Babar Nawaz and Deep Sea Love, as quoted on the old site.

## Important: do not restore the old site

The live site was giving a 500 error, and the archived Services pages
show spam links (casino, betting, escort) and the Wayback index lists
dozens of spam pages on the domain from 2024–2025. The old WordPress
install looks hacked. **Do a fresh, clean WordPress install and delete
the old files. Do not import a backup of the old site, and do not copy
its plugins or theme.** This theme and these pages are the clean rebuild.

## Install guide (about 20 minutes)

### Step 1 — Fresh WordPress
1. In your hosting panel, install a **fresh** WordPress on the domain
   (hiseashipping.com). Do not use the old install.
2. Log in to the new WordPress admin (`https://hiseashipping.com/wp-admin/`).
3. Go to Settings → General and check the Site Title is `HiSea Shipping`
   and the Site Address is `https://hiseashipping.com`.
4. Go to Settings → Permalinks and choose **Post name**, then Save.

### Step 2 — Install the theme
1. In WordPress admin, go to Appearance → Themes → Add New → Upload Theme.
2. Choose `hisea-shipping.zip` from this folder and click Install Now.
3. Click Activate.
4. If WordPress asks, that is all — the theme has no required plugins.

### Step 3 — Install Elementor Free (optional, but recommended)
1. Go to Plugins → Add New, search for **Elementor Website Builder**,
   Install, then Activate. Use the **free** version only — no Pro needed.
2. The theme already renders all 4 pages correctly without Elementor.
   Elementor is only needed if you want to edit the pages visually.
   The theme declares Elementor support, and works with the free
   Hello Elementor theme as an alternative, but you do not need to
   switch themes: keep HiSea Shipping active.

### Step 4 — Import the 4 pages
1. Go to Tools → Import → WordPress (if it asks, click Install Now for
   the WordPress Importer, then Run Importer).
2. Upload `import/hisea-shipping-pages.wxr` and click Upload file and import.
3. Assign the imported pages to your admin user and tick
   **Download and import file attachments** (there are no images in this
   import, so this changes nothing, but it is harmless).
4. Click Submit. You should get 4 pages: Home, About Us, Services, Contact.
5. Check each page: Pages → open it → on the right, under Template, it
   should say **HiSea Home**, **HiSea About**, **HiSea Services** or
   **HiSea Contact**. If a page says Default Template, change it to the
   matching HiSea template and Update.

### Step 5 — Set the home page and the menu
1. Go to Settings → Reading. Under “Your homepage displays”, choose
   **A static page**, Homepage: **Home**, Posts page: leave blank. Save.
2. Go to Appearance → Menus. Create a menu called **Main Menu**, add the
   4 pages in this order — Home, About Us, Services, Contact — and tick
   **Primary Menu** under Menu Settings. Save.
3. In the same menu screen, or by creating a second menu called
   **Footer Menu** with the same 4 pages, tick **Footer Menu**. Save.

### Step 6 — Logo (still needed)
The original logo could not be recovered — it failed to load in the
archive. Until a real logo is supplied, the header shows a text logo:
“HiSea Shipping”.
1. When you have the logo file (PNG with a transparent background is
   best, or SVG), go to Appearance → Customize → Site Identity →
   Select Logo, upload it, and Publish.
2. The header will then show the logo instead of the text.

### Step 7 — Quote form — check it works
The quote form is built into the theme, so **no form plugin is needed**.
That is a deliberate choice: Elementor Free has no form widget, and
adding Contact Form 7 would add a plugin the friend has to maintain.
The built-in form (Name, Email, Message, button “Get A FREE Quote”)
sends to **info@hiseashipping.com** using WordPress mail.

1. Open the Contact page on the live site, fill in the form with your
   own name and email, and submit it.
2. Check the inbox of info@hiseashipping.com. If the email does not
   arrive, the hosting mail is the problem, not the form: install a free
   SMTP plugin (for example WP Mail SMTP) and connect it to the mailbox.
3. If you prefer Contact Form 7 instead: install Contact Form 7, create
   a form with Name, Email and Message fields, set its recipient to
   info@hiseashipping.com, copy its shortcode, and replace the form in
   `page-contact.php` in the theme with that shortcode.

### Step 8 — Check on mobile, then basic SEO
1. Open the site on a phone. Check all 4 pages, the menu, and the quote
   form. The theme is responsive, but check it yourself.
2. For each page, check the browser tab title: Home, About Us, Services,
   Contact, followed by the site name. WordPress generates these from
   the page titles; if you install an SEO plugin (for example Rank Math
   or Yoast, both free), you can set a custom title and description per
   page there. Suggested descriptions are the first paragraph of each
   page.
3. In Settings → Privacy, or your SEO plugin, make sure the site is
   **not** set to discourage search engines.

## Editing the site later

- **Text changes:** Pages → open the page. If the page uses a HiSea
  template, the main sections come from the template file, so small text
  changes are easiest in Elementor or by editing the template file.
  For a full visual rebuild of a page in Elementor Free: create a new
  page, choose the Elementor Canvas template, and copy the text from
  `pages/<page>.html` in this folder into Elementor text widgets.
- **Colours and fonts:** they are in `hisea-shipping/style.css` at the
  top (`--navy`, `--sky`, `--amber`, and the `@font-face` rules).
  Do not add Google Fonts — the fonts are already in the theme.
- **Phone, email and address:** they are in one place,
  `hisea-shipping/functions.php`, in the `hisea_contact_details()`
  function. Change them there and they update in the header, footer
  and Contact page.
- **Quote form recipient:** also in `functions.php`, in
  `hisea_quote_form_handler()` — the line `$to = 'info@hiseashipping.com';`.

## Still missing — please get these from the friend

1. **Real logo** — not recoverable from the archive. Text logo used for now.
2. **Real photos** — hero, services, warehouse, team. The mockup used
   stock photos labelled as placeholders. No photos are included in
   this theme; add them in Elementor or in the page templates.
3. **Exact Mission and Vision wording** — not recoverable. The About
   page has a draft Mission and Vision written from the recovered
   purpose text on the old homepage, and it is marked as a draft in the
   template and in `pages/about.html`. Ask the friend to confirm or
   rewrite it before launch.
4. **Social links** — none were found on the old homepage. Add them in
   the footer if the friend has any.
5. **Google Business / Maps link** for the Lahore office — not found
   in the archive. Optional.

## What was deliberately NOT included

- No spam links, no casino, betting or escort links, no lorem ipsum
  placeholder text from the old site.
- No invented logo, statistics, partner names, hero text or founding
  date. The hero headline is the verified company description.
- No Google Fonts or other external requests. No Elementor Pro.
- No backup, database or files from the old hacked install.

## Files in the theme

```
hisea-shipping/
  style.css            Theme info, self-hosted fonts, all colours and layout
  functions.php        Menus, Elementor support, contact details, quote form
  header.php           Top bar, logo, navigation, quote button
  footer.php           About, useful links, head office, copyright
  index.php            Posts index (fallback, site has no blog)
  page.php             Default page template (editor content)
  page-home.php        Template: HiSea Home
  page-about.php       Template: HiSea About (Mission and Vision merged in)
  page-services.php    Template: HiSea Services (all 8 services)
  page-contact.php     Template: HiSea Contact (quote form)
  assets/fonts/
    sora.woff2         Sora, weights 600-800 (variable font)
    manrope.woff2      Manrope, weights 400-800 (variable font)
```
