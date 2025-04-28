# Repwise - Open-Source CRM Platform

<p align="center">
  <a href="https://repwise.com">
    <img src="https://repwise.com/repwise-logo.svg" width="100px" alt="Repwise logo" />
  </a>
</p>

<p align="center">
  <a href="https://laravel.com/docs/12.x"><img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel" alt="Laravel 12"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=flat-square&logo=php" alt="PHP 8.3"></a>
  <a href="https://github.com/Repwise/repwise/blob/main/LICENSE"><img src="https://img.shields.io/badge/License-GPL--3.0-blue.svg?style=flat-square" alt="License"></a>
  <a href="https://github.com/Repwise/repwise/actions"><img src="https://img.shields.io/github/actions/workflow/status/Repwise/repwise/tests.yml?branch=main&style=flat-square&label=tests" alt="Tests"></a>
</p>

<p align="center">
  <a href="https://repwise.com">🌐 Website</a> ·
  <a href="https://repwise.com/documentation">📚 Documentation</a> ·
  <a href="https://github.com/orgs/Repwise/projects/1/views/1">🛣️ Roadmap</a> ·
  <a href="#contributing">👥 Contributing</a>
</p>

---

## 🚀 Introduction

Repwise is a powerful, adaptable CRM platform built with modern technologies to help businesses effectively manage client relationships, streamline sales processes, and enhance team collaboration. Unlike traditional CRM solutions, Repwise adapts to your team's workflows through customizable data models and workspace segmentation.

**Core Strengths:**
- 💪 **Fully Customizable** - Create and manage custom fields without coding
- 🔄 **Multi-Team Support** - Securely manage multiple business units with isolated workspaces
- 🚀 **Modern Technology** - Built on Laravel 12, PHP 8.3, and Filament 3
- 🔒 **Privacy-Focused** - Self-host with complete data ownership
- 🌱 **Open Source** - Transparent development with GPL-3.0 license

<p align="center">
  <img src="https://repwise.com/images/github-preview-light.png" alt="Repwise Dashboard" style="max-width: 100%; border-radius: 8px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);" />
</p>

## ✨ Features

Repwise includes a robust set of features to help you manage your business relationships:

- **Contact Management**
    - Unified company and people profiles
    - Custom fields for contacts and organizations
    - LinkedIn profile integration

- **Sales Pipeline**
    - Visual kanban board for opportunities
    - Customizable sales stages
    - Deal tracking with monetary values

- **Task Management**
    - Task assignment and tracking
    - Visual task board by status and priority
    - Due date management
    - Task notifications

- **Notes & Documentation**
    - Rich text editor for detailed notes
    - Notes linked to companies, people, and opportunities
    - Collaborative note-taking

- **Team Collaboration**
    - Team-based workspaces
    - Role-based access control
    - Team member invitations
    - Personal and shared workspace segmentation

- **Security**
    - Two-factor authentication
    - Social login (Google, GitHub)
    - API token management
    - Secure password handling

## 🏁 Quick Start

### Prerequisites

- PHP 8.3+ with PostgreSQL support
- Composer
- Node.js & NPM

### Installation

```bash
# Clone the repository
git clone https://github.com/Repwise/repwise.git
cd repwise

# Install dependencies
composer install
npm install

# Set up environment and database
cp .env.example .env
php artisan key:generate

# Configure your database in .env then run migrations
php artisan migrate

# Link storage for file uploads
php artisan storage:link

# Build assets and start the development server
npm run dev
php artisan serve
```

Visit `http://localhost:8000` in your browser and create your admin account to get started.

## 📚 Documentation

Repwise comes with comprehensive documentation:

- [Business Guide](resources/markdown/documentation/business-guide.md) - Using Repwise from a business perspective
- [Quick Start Guide](resources/markdown/documentation/quick-start-guide.md) - Step-by-step getting started guide
- [Technical Guide](resources/markdown/documentation/technical-guide.md) - Architecture and development information
- [API Documentation](resources/markdown/documentation/api-guide.md) - Integration with the Repwise API

## 🧩 Premium Components

While Repwise is fully open-source, it offers an optional premium component:

**Custom Fields** - A Filament plugin providing dynamic data modeling capabilities throughout the application, enabling unlimited customization possibilities without coding.

- [Documentation](https://custom-fields.repwise.com/introduction)
- [Marketplace](https://filamentphp.com/plugins/repwise-custom-fields)

This premium component supports ongoing development of the open-source platform.

## 🔧 Tech Stack

Repwise is built with modern technologies:

- **Backend**: PHP 8.3, Laravel 12
- **Frontend**: Tailwind CSS, Alpine.js
- **Admin Interface**: Filament 3
- **Database**: PostgreSQL (recommended), SQLite support for development
- **Authentication**: Laravel Jetstream, Laravel Fortify
- **Queue Processing**: Laravel Horizon
- **Error Tracking**: Sentry integration

## 🤝 Contributing

We welcome contributions from developers of all skill levels!

### Development Workflow

1. Fork the repository
2. Create a feature branch: `git checkout -b feat/amazing-feature`
3. Make your changes following our coding standards
4. Run tests to ensure quality: `composer test`
5. Commit your changes: `git commit -am 'Add some amazing feature'`
6. Push to your branch: `git push origin feat/amazing-feature`
7. Create a Pull Request

For more details, see our [Contributing Guide](CONTRIBUTING.md).

## 📝 License

Repwise is open-source software licensed under the [GPL-3.0 license](LICENSE).

---

<p align="center">
  Built with ❤️ by the Repwise Team
</p>
