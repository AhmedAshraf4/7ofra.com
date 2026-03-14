# 7ofra.com 🚧

**7ofra.com** is a Laravel-based web application for reporting and visualizing **road bumps and roadblocks** on a map. It combines **community-submitted road hazard reports** with an **official news section** managed by government users, helping drivers stay informed about road conditions before and during trips.

> This README is written from the public repository structure and the existing project description visible on GitHub. The current repo description says the platform helps users detect road bumps on a map, add bumps to alert others, and includes a government-controlled news section for roadblocks. citeturn814841view0

---

## Table of Contents

- [Overview](#overview)
- [Problem Statement](#problem-statement)
- [Core Features](#core-features)
- [User Roles](#user-roles)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [How It Works](#how-it-works)
- [Installation](#installation)
- [Environment Configuration](#environment-configuration)
- [Running the Project](#running-the-project)
- [Suggested Database Entities](#suggested-database-entities)
- [Possible Routes / Modules](#possible-routes--modules)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [Author](#author)

---

## Overview

Road hazards such as **bumps, potholes, blocked roads, and temporary road obstacles** can affect both safety and travel time. In many cities, there is no simple centralized platform for drivers to report these issues and warn other road users.

**7ofra.com** aims to solve that by providing a platform where:

- Users can **view road hazards on a map**
- Users can **report new bumps or obstacles**
- Drivers can **stay updated on roadblock news**
- Government or authorized users can **publish official updates and alerts**

This makes the application useful as both a **community reporting tool** and an **official information channel**.

---

## Problem Statement

Drivers frequently encounter road issues without prior warning. These include:

- Sudden road bumps or potholes
- Temporary road closures
- Construction zones
- Unannounced roadblocks
- Poor communication between citizens and authorities

The goal of **7ofra.com** is to reduce that information gap through a map-based reporting and alerting system.

---

## Core Features

### 1. Road Bump Visualization
Users can open the application and see reported bumps or hazards displayed on a map.

### 2. Community Reporting
Users can add new road bumps or obstacles to help warn other drivers.

### 3. Official News / Roadblock Updates
Government users can publish road news and roadblock alerts through a managed news section.

### 4. Safety Awareness
The platform encourages a collaborative and safety-focused ecosystem where users contribute useful road information in real time.

---

## User Roles

### Regular Users
Regular users can:

- Open the platform
- View reported road bumps
- Add new bump reports
- Read roadblock news and updates

### Government / Admin Users
Government or authorized users can:

- Create official roadblock announcements
- Publish transportation-related news
- Manage informational updates for citizens

---

## Tech Stack

The public repository structure strongly suggests the project is built with **Laravel**, using **PHP** and **Blade templates**. The repo shows `app/Models`, controllers under `Http/Controllers`, `database/migrations`, `resources/views`, and `routes`, and GitHub lists the languages as Blade and PHP. citeturn814841view0

### Backend
- PHP
- Laravel

### Frontend
- Blade templates
- HTML
- CSS
- JavaScript

### Database
- MySQL or MariaDB (typical Laravel setup)

### Project Pattern
- MVC architecture

---

## Project Structure

The repository currently exposes the following main folders and files on GitHub: `Http/Controllers`, `app/Models`, `database/migrations`, `public/img`, `resources/views`, `routes`, and `README.md`. citeturn814841view0

```text
7ofra.com/
├── Http/
│   └── Controllers/
├── app/
│   └── Models/
├── database/
│   └── migrations/
├── public/
│   └── img/
├── resources/
│   └── views/
├── routes/
└── README.md
```

### What these folders likely contain

- **Http/Controllers/**: Request-handling logic for bumps, news, auth, and map interactions
- **app/Models/**: Eloquent models for users, bump reports, news posts, and related entities
- **database/migrations/**: Database schema definitions
- **public/img/**: Publicly accessible images and project assets
- **resources/views/**: Blade templates for the UI
- **routes/**: Web routes for pages and form actions

---

## How It Works

A typical user journey might look like this:

1. A driver opens the website.
2. The application displays a map with reported road bumps.
3. The driver notices a new road bump or obstacle.
4. The driver submits a report through the platform.
5. Other users can now see that report on the map.
6. If there is a road closure or an official traffic issue, government users can publish an announcement in the news section.

From a high level, the application appears to follow Laravel's standard MVC flow:

```text
Request -> Route -> Controller -> Model -> Database -> View
```

---

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/AhmedAshraf4/7ofra.com.git
cd 7ofra.com
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the environment file

```bash
cp .env.example .env
```

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure the database in `.env`

Update these values based on your local setup:

```env
APP_NAME="7ofra.com"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=7ofra
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Serve the application

```bash
php artisan serve
```

The application should then be available at:

```text
http://127.0.0.1:8000
```

---

## Environment Configuration

A typical Laravel environment for this project may include:

```env
APP_NAME="7ofra.com"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=7ofra
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

If the project uses a maps provider, you may also need something like:

```env
MAP_API_KEY=your_api_key_here
```

---

## Running the Project

After installation:

```bash
php artisan serve
```

If frontend assets are used through Laravel Mix or Vite, you may also need:

```bash
npm install
npm run dev
```

Only run the Node steps if the project includes frontend asset tooling.

---

## Suggested Database Entities

Based on the repository description and folder structure, the system likely revolves around a few core entities.

### Users
Stores application users and possibly role information.

Example fields:
- `id`
- `name`
- `email`
- `password`
- `role`
- `created_at`
- `updated_at`

### Bumps / Hazards
Stores road bump or obstacle reports.

Example fields:
- `id`
- `title`
- `description`
- `latitude`
- `longitude`
- `reported_by`
- `status`
- `created_at`
- `updated_at`

### News / Alerts
Stores roadblock updates and official announcements.

Example fields:
- `id`
- `title`
- `content`
- `published_by`
- `created_at`
- `updated_at`

---

## Possible Routes / Modules

Depending on implementation, the project may include modules like:

### Public Pages
- Home page
- Interactive map page
- News / alerts page
- About page

### User Actions
- Register / login
- Submit bump report
- View bump details

### Admin / Government Actions
- Create roadblock news
- Edit announcements
- Manage reports

Possible route examples:

```php
Route::get('/', [HomeController::class, 'index']);
Route::get('/map', [MapController::class, 'index']);
Route::post('/bumps', [BumpController::class, 'store']);
Route::get('/news', [NewsController::class, 'index']);
Route::post('/news', [NewsController::class, 'store']);
```

---

## Future Enhancements

There are several strong directions this project could grow into:

- Real-time hazard updates
- Report verification or voting system
- Mobile-friendly or native mobile app
- GPS-assisted road issue reporting
- Image upload with bump reports
- Severity levels for hazards
- Integration with OpenStreetMap or Google Maps
- Analytics dashboard for authorities
- Notification system for nearby roadblocks
- Arabic / English localization

---

## Contributing

Contributions are welcome.

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push the branch
5. Open a pull request

Example:

```bash
git checkout -b feature/improve-readme
git commit -m "Improve project documentation"
git push origin feature/improve-readme
```

---

