# CrowdRail

## 📘 Archived University Project

CrowdRail is a web application built using PHP for submitting, tracking, and reviewing train sightings and events.

This project was developed during my university studies and demonstrates early experience with backend development, authentication systems, and role-based workflows.

---

## Features

- **User Registration & Login:**  
  Secure registration and login system with password hashing.

- **Role-Based Access:**  
  Users can have roles (e.g., editor) for special permissions.

- **Dashboard:**  
  Users can view and manage their own submissions.

- **Submit Sightings:**  
  Users can submit new train sightings/events with optional media uploads.

- **Admin Review Panel:**  
  Editors can review, approve, or reject all user submissions.

- **Security:**  
  - Output escaping to prevent XSS.
  - Secure session cookie settings.
  - PDO with prepared statements to prevent SQL injection.

- **Responsive UI:**  
  Built with Bootstrap for a modern, mobile-friendly interface.

---

## Getting Started

### Prerequisites

- PHP 8.x
- MySQL/MariaDB
- Composer (optional, if you add dependencies)
- Web server (e.g., Apache, XAMPP)

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/CrowdRail-Project.git
   cd CrowdRail-Project
   ```

2. **Set up the database:**
   - Create a MySQL database named `crowdrail`.
   - Import the provided SQL schema (if available).

3. **Configure the application:**
   - Copy `config.sample.php` to `config.php` and update database credentials.

4. **Set permissions:**
   - Ensure the `uploads/` directory is writable by the web server.

5. **Run the application:**
   - Access via your local web server (e.g., http://localhost/CrowdRail).

---

## File Structure

- `config.php` – Configuration and helper functions.
- `register.php` – User registration.
- `login.php` – User login.
- `logout.php` – User logout.
- `dashboard.php` – User dashboard.
- `submit.php` – Submit new sighting.
- `admin.php` – Editor/admin review panel.
- `header.php` / `footer.php` – Layout templates.

---


## 🧠 What This Project Demonstrates

- Backend development using PHP
- Authentication and authorization workflows
- Role-based system design
- CRUD operations with a relational database
- Basic security best practices

---

## 🛠 Tech Stack

- Language: PHP 8.x
- Database: MySQL / MariaDB
- UI: Bootstrap
- Server: Apache / XAMPP

---

## Security Notes

- Do **not** commit `config.php` with real credentials to public repositories.
- Always validate and sanitize user input.
- Use HTTPS in production.

---
## ⚠️ Status

This project is **archived and not actively maintained**.

It reflects my early experience with PHP and backend systems.
---

## 🚀 Current Focus

I am currently building modern backend systems using:
- FastAPI
- PostgreSQL
- Clean architecture (services, repositories, domains)

---

## License

This project is licensed under the MIT License.

---

## Credits
  
Inspired by community-driven reporting platforms.
