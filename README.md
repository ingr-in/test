# प्रकृति का सौंदर्य - Nature Website 🌿

[![GitHub license](https://img.shields.io/github/license/yourusername/nature-website)](https://github.com/yourusername/nature-website)

A beautiful Hindi website about nature with admin panel for content management.

## Features ✨

- Responsive design
- Gradient wedding-style fonts
- Dark mode toggle
- Admin content management panel
- Multi-page navigation

## Installation 🛠️

1. Clone the repository:
```bash
git clone https://github.com/yourusername/nature-website.git
```

2. Import the database:
```sql
CREATE DATABASE nature_website;
USE nature_website;

CREATE TABLE sections (
  id INT AUTO_INCREMENT PRIMARY KEY,
  page VARCHAR(50) NOT NULL,
  section_name VARCHAR(100) NOT NULL,
  content TEXT NOT NULL
);

INSERT INTO sections VALUES 
(1,'home','main_heading','🌿 प्रकृति का सौंदर्य 🌸'),
(2,'home','main_content','प्रकृति वह शक्ति है जो जीवन को जन्म देती है...');
```

3. Configure database in `includes/config.php`

4. Deploy to your server or use with XAMPP/WAMP

## Admin Access 🔒

Visit `/admin.php` to manage content:
- Username: admin
- Password: nature123

## Contributing 🤝

Pull requests are welcome! For major changes, please open an issue first.

## License 📄

This project is licensed under the MIT License.
