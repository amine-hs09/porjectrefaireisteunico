# project_refaire_site_unico

This repository contains the source code for rebuilding the **Unico Consult** website using PHP and MySQL.

## Local Development (XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/index.html).
2. Clone or copy this repository into your `htdocs` directory.
3. Start Apache and MySQL from the XAMPP control panel.
4. Create a database (for example `unico`) and import `unico.sql` using phpMyAdmin.
5. Navigate to `http://localhost/project_refaire_site_unico/public/` in your browser.

## Folder Structure (planned)

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
- `public/contact.php` - Contact form that stores messages in the database.
- `admin/login.php` - Admin login.
- `admin/index.php` - Protected admin area.
- `admin/messages.php` - List of messages received from the contact form.

## Database configuration

Edit `includes/db.php` to match your local MySQL credentials.

### Messages table

Create a `messages` table in your database:

```sql
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  subject VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  status ENUM('Nouveau', 'En cours', 'Traité') DEFAULT 'Nouveau',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

An SQL dump (`unico.sql`) is included at the repository root. Import it to create the database and messages table automatically.

