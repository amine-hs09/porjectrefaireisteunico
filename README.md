# project_refaire_site_unico

This repository contains the source code for rebuilding the **Unico Consult** website using PHP and MySQL.

## Local Development (XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/index.html).
2. Clone or copy this repository into your `htdocs` directory (usually `C:\xampp\htdocs` on Windows).
3. Start **Apache** and **MySQL** from the XAMPP control panel.
4. Import the `database.sql` file to create the initial database:
   - Open phpMyAdmin from the XAMPP panel.
   - Create a database named `unico`.
   - Use the "Import" tab to load `database.sql` located at the project root.
5. Update the credentials in `includes/db.php` if your MySQL user or password differs from the defaults.
6. Navigate to `http://localhost/project_refaire_site_unico/public/` in your browser to see the site.

## Folder Structure

```
project_refaire_site_unico/
├── public/   # Public-facing files
├── admin/    # Admin dashboard
└── includes/ # Reusable PHP scripts and configuration
```

## Repository name

This repository was created with the typo `porjectrefaireisteunico`.
The intended name is `project_refaire_site_unico`.

## Available Pages

- `public/index.php` - Homepage.
- `public/services.php` - Service listing.
- `public/team.php` - Team presentation.
- `public/trust.php` - Client testimonials.
- `public/contact.php` - Contact form (stores messages and sends an email).
- `admin/login.php` - Admin login.
- `admin/index.php` - Protected admin area with message count.
- `admin/messages.php` - List contact form messages.

## Database configuration

Edit `includes/db.php` to match your local MySQL credentials.

## Working with Visual Studio Code

1. Install [Visual Studio Code](https://code.visualstudio.com/).
2. From Visual Studio Code, choose **File > Open Folder...** and select the cloned project directory.
