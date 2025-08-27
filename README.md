# [Laravel API Template](https://github.com/premierstacks/laravel-api-template) by [Tomáš Chochola](https://github.com/tomchochola)

The Laravel API Template by Premierstacks is the ultimate foundation for Laravel development, combining a secure, modular setup with advanced session handling, multi-language support, and pre-configured tools. Designed for performance and scalability, it offers extensive customization while maintaining high-quality standards for production readiness.

## What is Laravel API Template?

The Laravel API Template is Premierstacks’ flagship offering, meticulously crafted to address the most common and critical needs of Laravel applications while maintaining a focus on code quality, security, and ease of use. This template is more than a starter kit—it’s an extensible platform designed to support your application from prototyping through to production deployment. With Premierstacks' Laravel Stack at its core, the template provides an architecture optimized for clean, maintainable, and scalable code, integrating seamlessly with Premierstacks' utilities for validation, authentication, and security.

One of the standout features of the Laravel API Template is its fully-integrated, production-ready authentication system. With comprehensive options for user registration, session management, password resets, and account verification, this template handles authentication needs with precision. API responses are pre-configured to return JSON format for streamlined integration with any frontend framework, and every endpoint supports multipart/form-data inputs, allowing rapid integration with mobile or web-based frontend clients. Error handling is uniform, covering validation and other exceptions with structured API responses, ensuring a consistent experience across the entire application.

This template also prioritizes security, offering middleware for throttling, request format validation, and content negotiation. With these security-focused layers in place, developers can ensure that applications built with the Laravel API Template are both resilient and performant, ready to handle production demands. Additionally, Premierstacks provides a robust routing and middleware configuration, enabling fine-grained control over session handling and request validation with minimal setup.

Customization is at the heart of this template. While it includes a powerful reference implementation, every component can be tailored or extended to meet specific project requirements. Premierstacks offers a flexible yet reliable configuration that allows developers to seamlessly integrate custom business logic, unique workflows, and any additional services required by the project. From authentication controllers and validation rules to route handling and middleware, every aspect of this template has been crafted for ease of modification and extension.

In summary, the Laravel API Template by Premierstacks is an unparalleled foundation for building robust Laravel applications. Whether you’re building a new project from scratch or looking to streamline an existing application, this template brings together best practices and advanced tooling in a comprehensive, ready-to-deploy package that simplifies development, ensures consistency, and maximizes scalability.

## Preconfigured Features

The Laravel API Template offers a robust set of pre-built features tailored for rapid, high-quality development. Here are the most notable components:

### Comprehensive API Endpoints

With a fully integrated API, this template provides a suite of ready-to-use endpoints for essential functionalities, including authentication, session management, and verification workflows. Each endpoint is configured for vnd.api+json responses, ensuring consistency across all interactions, including structured error handling.

```
# Returns an OpenAPI Swagger GUI for API exploration.
GET /api/swagger

# Retrieves the current authenticated user’s details.
POST /api/authenticatable/retrieve

# Sends a login verification request.
POST /api/authenticatable/login_verification

# Logs the user in with provided credentials.
POST /api/authenticatable/login

# Sends an email verification request for credential updates.
POST /api/authenticatable/email_verification

# Registers a new user.
POST /api/authenticatable/register

# Sends a verification request for account deletion.
POST /api/authenticatable/destroy_verification

# Deletes the authenticated user’s account.
POST /api/authenticatable/destroy

# Updates the authenticated user’s information.
POST /api/authenticatable/update

# Sends a verification for credentials update.
POST /api/authenticatable/update_credentials_verification

# Updates user credentials.
POST /api/authenticatable/update_credentials

# Shows details of the authenticated user.
GET /api/authenticatable/show

# Logs out the user from the current device.
POST /api/authenticatable/logout_current_device

# Logs out the user from other devices.
POST /api/authenticatable/logout_other_devices

# Logs out the user from all devices.
POST /api/authenticatable/logout_all_devices

# Sends a password reset verification request.
POST /api/authenticatable/reset_password_verification

# Resets the user’s password.
POST /api/authenticatable/reset_password

# Sends a verification request for password update.
POST /api/authenticatable/update_password_verification

# Updates the user’s password.
POST /api/authenticatable/update_password

# Invalidates the current session.
POST /api/sessions/invalidate

# Regenerates the session ID.
POST /api/sessions/regenerate

# Shows verification details.
GET /api/verifications/show

# Completes the verification process.
POST /api/verifications/complete
```

### JSON:API Response Format

All endpoints are configured to return responses in the vnd.api+json format, with uniform error handling across all request types, including validation and other exceptions. This setup provides frontend applications with structured, machine-readable responses, allowing for streamlined client-server communication.

### OpenAPI/Swagger Specification

An embedded Swagger interface is available, giving developers a comprehensive overview of all available API routes, request formats, and expected responses. This feature simplifies API exploration and integration by providing a user-friendly, interactive documentation tool.

### Multilingual Support

This template supports multiple languages for all user-facing content, including notifications, emails, validation messages, and error responses. Reference implementations for English (en), Slovak (sk), and Czech (cs) are included, making localization straightforward and ensuring accessibility across different languages.

### Full Premierstacks Ecosystem

Bundled with the Premierstacks ecosystem, the template includes the following tools and libraries for a complete development experience:

**[https://github.com/premierstacks/laravel-stack](https://github.com/premierstacks/laravel-stack)**

The Laravel Stack is a robust, pre-configured foundation for scalable Laravel applications, featuring essential tools for code quality, authentication, validation, and security. With modular configurations and helper utilities, it supports streamlined workflows, ideal for both rapid prototyping and production-ready deployments.

**[https://github.com/premierstacks/php-stack](https://github.com/premierstacks/php-stack)**

The PHP Stack is a versatile set of utility libraries and helper functions for PHP projects, designed to simplify common development tasks and provide robust support for building scalable and maintainable applications. It offers a cohesive set of tools that integrate seamlessly into any PHP project, helping developers work more efficiently.

**[https://github.com/premierstacks/php-cs-fixer-stack](https://github.com/premierstacks/php-cs-fixer-stack)**

The PHPCSFixer Stack is a pre-configured set of rules and templates specifically tailored for PHP projects. It streamlines the process of setting up PHP-CS-Fixer, making it easy to enforce consistent coding standards and best practices across your PHP codebase without the hassle of manual configuration.

**[https://github.com/premierstacks/phpstan-stack](https://github.com/premierstacks/phpstan-stack)**

The PHPStan Stack is a pre-configured collection of PHPStan setups designed to streamline static analysis for PHP projects. It provides ready-to-use configurations that enforce strict type safety and coding standards, allowing you to focus on building features instead of resolving analysis errors.

**[https://github.com/premierstacks/eslint-stack](https://github.com/premierstacks/eslint-stack)**

The ESLint Stack is a comprehensive set of pre-configured ESLint configurations for JavaScript, TypeScript, and React. It simplifies the process of integrating ESLint into projects, ensuring a consistent coding style and enforcing best practices across multiple environments—all with minimal setup effort.

**[https://github.com/premierstacks/prettier-stack](https://github.com/premierstacks/prettier-stack)**

The Prettier Stack is a fully-configured set of Prettier configurations that helps you maintain consistent code formatting across various JavaScript, TypeScript, and CSS projects. It’s designed to simplify the process of setting up and using Prettier, making it easy to integrate into any development workflow.

### Advanced Makefile CLI for Automation

The included Makefile streamlines all aspects of development and deployment, from code linting to running tests and managing migrations. Available commands cover:

**Setup and Provisioning:** `make local`, `make testing`, `make development`, `make staging`, `make production`<br />
**Testing and Linting:** `make check`, `make lint`, `make stan`, `make test`, `make audit`, `make coverage`<br />
**Code Formatting and Fixing:** `make fix`<br />
**Prototype:** `make start`<br />

## What is Premierstacks

[GitHub Organization → /premierstacks](https://github.com/premierstacks)

Premierstacks is a premier organization delivering a complete ecosystem of libraries, packages, and templates for full-stack web development. It provides end-to-end solutions for backend systems, APIs, and frontend interfaces built on PHP, Laravel, TypeScript, React, and Material Design 3.

Beyond code, Premierstacks focuses on creating a seamless development experience, offering support tools for planning, architecture, deployment, and long-term project maintenance. Each resource within the ecosystem is crafted with precision, adhering to strict quality standards, and designed to scale effortlessly.

From initial project planning and logical architecture to seamless development workflows and optimized production deployment, Premierstacks delivers tools engineered for excellence across every stage of the software lifecycle.

## Why Premierstacks

Premierstacks exists to solve the recurring challenges of modern software development: inconsistency, poor maintainability, and fragmented tooling. It offers a complete ecosystem of libraries, templates, and supporting tools, designed to streamline workflows, enforce best practices, and ensure long-term reliability.

Every component in Premierstacks is crafted with precision, following strict quality standards. From backend logic to frontend interfaces and infrastructure tooling, the focus remains on delivering scalable, future-proof, and seamless solutions. With Premierstacks, development becomes faster, cleaner, and more consistent—right from the first line of code to final deployment.

## What is Tomchochola

[GitHub Personal → /tomchochola](https://github.com/tomchochola)

The Tomchochola GitHub profile features a range of public and private repositories, including experimental tools, independent projects, and legacy systems. These repositories often represent unique solutions that exist outside the strict quality and structural guidelines of Premierstacks.

Here, you’ll find codebases that may belong to different ecosystems, technologies, or experimental workflows. Some projects serve specific use cases, while others are standalone solutions or serve as proof-of-concept prototypes. This profile is a playground for ideas, tools, and resources that might not fully align with the long-term goals of Premierstacks but still offer value and insight into various aspects of software development.

## About the Creator

Tomáš Chochola is a software architect, technical leader, and creator of the Premierstacks ecosystem. With years of experience in backend and frontend development, cloud infrastructure, and team management, he has established a reputation for delivering scalable, maintainable, and robust software solutions.

His expertise spans backend systems built on PHP and Laravel, frontend interfaces designed with React and Material Design 3, and efficient workflows powered by modern tooling and infrastructure solutions.

### Specializations

**Backend Development:** PHP, Laravel, JSON:API<br />
**Frontend Development:** TypeScript, React, Material Design 3<br />
**Tooling:** ESLint, Prettier, Webpack, PHPStan, PHP CS Fixer, Stylelint<br />

## Support the Creator

**[GitHub Sponsors -> /sponsors/tomchochola](https://github.com/sponsors/tomchochola)**

Premierstacks is now freely available under the Creative Commons BY-ND 4.0 license, offering high-quality tools, libraries, and templates to the developer community. While the ecosystem remains open and accessible, its growth, updates, and ongoing maintenance depend on individual support.

By sponsoring Tomáš Chochola on GitHub Sponsors, you directly contribute to the continued development, improvement, and long-term sustainability of Premierstacks. Every contribution supports the creation of reliable, scalable, and future-proof solutions for developers worldwide.

Your support makes a difference—thank you for being a part of this journey.

## License

**Creative Commons Attribution-NoDerivatives 4.0 International**

**Copyright © 2025, Tomáš Chochola <chocholatom1997@gmail.com>. Some rights reserved.**

This license requires that reusers give credit to the creator. It allows reusers to copy and distribute the material in any medium or format in unadapted form only, even for commercial purposes.

### Creative Commons License for Software?

The Creative Commons BY-ND 4.0 license is perfectly suited to Premierstacks. It offers developers the freedom to integrate the software into their projects while preserving the original author’s vision and ensuring consistency across the ecosystem.

Dynamic linking and object-oriented programming practices, such as inheritance or method overriding, are fully permitted. This enables seamless adaptation of the software in dynamic contexts without violating the license. However, static linking, forks, or modifications that alter the software’s original form are prohibited to maintain its integrity and prevent the creation of fragmented or subpar versions.

By protecting the core quality and unity of Premierstacks, this license ensures that developers can confidently rely on it as a trusted, high-standard solution for their projects.

## Getting Started

**1. Review the documentation and license**

Ensure this package fits your needs and that you agree with the terms.

**2. Project Creation**

Use the `Use this template` button on the GitHub repository page to create a new repository from this template.

**3. Customize Your Project**

Explore the generated repository, remove unnecessary components and adjust it to fit your project's needs.

**4. CLI**

Available make commands:

```bash
# provision for local environment
make local

# provision for testing (CI) environment
make testing

# provision for development environment
make development

# provision for staging environment
make staging

# provision for production environment
make production

# start artisan dev server
make start / make serve / make server

# run automatic code fixers
make fix

# run linters, static analysis, tests and audit
make check

# browse phpunit code coverage
make coverage

# clean up the project
make clean
```

## Contact

**📧 Email: <chocholatom1997@gmail.com>**<br />
**👨 GitHub Personal: [https://github.com/tomchochola](https://github.com/tomchochola)**<br />
**🏢 GitHub Organization: [https://github.com/premierstacks](https://github.com/premierstacks)**<br />
**💰 GitHub Sponsors: [https://github.com/sponsors/tomchochola](https://github.com/sponsors/tomchochola)**<br />

## Tree

The following is a breakdown of the folder and file structure within this repository. It provides an overview of how the code is organized and where to find key components.

```bash
.
├── app
│   ├── Models
│   │   └── User.php
│   └── Providers
│       └── AppServiceProvider.php
├── artisan
├── AUTHORS.md
├── bootstrap
│   ├── app.php
│   ├── cache
│   └── providers.php
├── composer.json
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── cors.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 0001_01_01_000000_create_framework_tables.php
│   │   └── 0001_01_01_000001_create_auth_tables.php
│   └── seeders
│       ├── DatabaseSeeder.php
│       └── UserSeeder.php
├── docs
│   └── application_documentation.md
├── .editorconfig
├── .env.development.example
├── .env.local.example
├── .env.production.example
├── .env.staging.example
├── .env.testing.example
├── eslint.config.js
├── .gitattributes
├── .gitignore
├── lang
│   ├── cs
│   │   ├── actions.php
│   │   ├── auth.php
│   │   ├── notifications.php
│   │   ├── pagination.php
│   │   ├── passwords.php
│   │   ├── statuses.php
│   │   └── validation.php
│   ├── cs.json
│   ├── en
│   │   ├── actions.php
│   │   ├── auth.php
│   │   ├── notifications.php
│   │   ├── pagination.php
│   │   ├── passwords.php
│   │   ├── statuses.php
│   │   └── validation.php
│   ├── en.json
│   ├── sk
│   │   ├── actions.php
│   │   ├── auth.php
│   │   ├── notifications.php
│   │   ├── pagination.php
│   │   ├── passwords.php
│   │   ├── statuses.php
│   │   └── validation.php
│   └── sk.json
├── LICENSE
├── Makefile
├── package.json
├── .php-cs-fixer.php
├── phpstan.neon
├── phpunit.xml
├── prettier.config.js
├── .prettierignore
├── provision
│   ├── cron
│   │   └── scheduler.sh
│   └── supervisor
│       └── queue_worker.sh
├── public
│   ├── apple-touch-icon.png
│   ├── docs
│   │   ├── httpie.sh
│   │   └── openapi.json
│   ├── favicon.ico
│   ├── favicon-16x16.png
│   ├── favicon-32x32.png
│   ├── index.php
│   └── robots.txt
├── README.md
├── resources
│   └── views
│       └── errors
│           ├── 1xx.blade.php
│           ├── 2xx.blade.php
│           ├── 3xx.blade.php
│           ├── 4xx.blade.php
│           ├── 401.blade.php
│           ├── 402.blade.php
│           ├── 403.blade.php
│           ├── 404.blade.php
│           ├── 419.blade.php
│           ├── 429.blade.php
│           ├── 5xx.blade.php
│           ├── 500.blade.php
│           └── 503.blade.php
├── routes
│   ├── console.php
│   └── http.php
├── storage
│   ├── app
│   │   ├── private
│   │   └── public
│   ├── framework
│   │   ├── cache
│   │   │   └── data
│   │   ├── sessions
│   │   ├── testing
│   │   └── views
│   └── logs
└── tests
    ├── Feature
    │   └── NotFoundControllerTest.php
    ├── TestCase.php
    └── Unit
        └── ExampleTest.php

39 directories, 96 files
```
