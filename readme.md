# 🚂 CrowdRail

A community-driven platform for sharing, moderating, and discussing train sightings.

CrowdRail enables rail enthusiasts and community members to report train sightings, upload supporting media, and engage with a centralized platform designed for community participation and content moderation.

---

## 📋 Overview

Train sightings and rail-related observations are often shared across fragmented channels, making it difficult for enthusiasts to discover updates, contribute information, and participate in discussions within a dedicated community space.

CrowdRail addresses this by providing a centralized platform where users can submit sightings, manage their contributions, and interact through a structured reporting workflow.

The platform also includes moderation tools that help maintain content quality and ensure submissions meet community standards before publication.

---

## 🚀 Key Features

### 🔐 User Registration & Authentication
* Secure account registration and login
* Password hashing for credential protection
* Session-based authentication

### 📢 Community Reporting
* Submit train sightings and events
* Add supporting information
* Upload optional media attachments

### 📊 User Dashboard
* View personal submissions
* Manage contributed content
* Track submission status

### 🛡️ Moderation Workflow
* Review submitted sightings
* Approve or reject content
* Maintain content quality standards

### 👥 Role-Based Access Control
* Standard user permissions
* Editor-level moderation permissions
* Controlled access to administrative functionality

### 📱 Responsive Interface
* Mobile-friendly experience
* Built using Bootstrap
* Consistent layout across devices

---

## 🛠️ Technology Stack

### 🎨 Frontend
* HTML
* CSS
* Bootstrap

### ⚙️ Backend
* PHP 8.x

### 🗄️ Database
* MySQL / MariaDB

### 🌐 Server Environment
* Apache
* XAMPP

---

## ⚡ Technical Highlights

### 🔑 Authentication & Session Management
Implemented secure login and session handling to support authenticated user interactions.

### 🛡️ Role-Based Access Control (RBAC)
Permission-based access ensures administrative functionality is restricted to authorized users.

### 📝 Content Moderation
Designed workflows that allow moderators to review community-submitted content before publication.

### 🔒 Secure Database Access
Used PDO prepared statements to protect against SQL injection vulnerabilities.

### 🛡️ Secure Output Handling
Applied output escaping techniques to reduce cross-site scripting (XSS) risks.

---

## 🏗️ Project Architecture

```text
CrowdRail/
│
├── config.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── submit.php
├── admin.php
│
├── header.php
├── footer.php
│
├── uploads/
│
└── database/
```

### 📂 Core Files

| File                    | Purpose                                        |
| ----------------------- | ---------------------------------------------- |
| config.php              | Application configuration and helper functions |
| register.php            | User registration                              |
| login.php               | User authentication                            |
| logout.php              | Session termination                            |
| dashboard.php           | User dashboard                                 |
| submit.php              | Sighting submission                            |
| admin.php               | Moderation and review functionality            |
| header.php / footer.php | Shared layout components                       |

---

## 🏁 Getting Started

### 📋 Prerequisites
* PHP 8.x
* MySQL or MariaDB
* Apache Web Server
* XAMPP (recommended for local development)

### 💻 Installation

#### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/CrowdRail.git

cd CrowdRail
```

#### 2. Create the Database
Create a database named:
```sql
crowdrail
```
Import the provided SQL schema if available.

#### 3. Configure the Application
Copy:
```text
config.sample.php
```
to:
```text
config.php
```
Update the database credentials.

#### 4. Configure Upload Permissions
Ensure the uploads directory is writable by the web server.

#### 5. Start the Application
Place the project inside your web server directory and navigate to:
```text
http://localhost/CrowdRail
```

---

## 🔒 Security Considerations

The project includes several security-focused practices:
* Password hashing
* Session-based authentication
* Secure session configuration
* Prepared statements using PDO
* Output escaping
* Input validation and sanitization

For production deployments:
* Use HTTPS
* Secure environment variables
* Restrict file upload types
* Configure proper server hardening

---

## 🔮 Potential Future Improvements

* Search and filtering functionality
* Geographic sighting mapping 📍
* User profiles 🧑‍💻
* Notification system 🔔
* Community reputation features 🏆
* Image optimization and storage improvements 🖼️
* REST API integration 🔌

---

## 📈 Project Status

Completed portfolio project.

The application is not actively maintained but remains part of my software development portfolio as an example of a community-driven reporting platform featuring authentication, moderation workflows, and role-based access control.

---

## 📄 License

This project is licensed under the MIT License.
