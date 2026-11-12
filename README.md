# CareerManager

A web application to track internship applications: the companies you apply to, the applications you send, and their progress.

The scope starts with internships, but the data model is kept generic so it can later cover jobs and work-study contracts too.

## Why this project

This is a **learning project**. It has two goals:

1. **Learn Laravel** by building a real application step by step, following the official documentation and best practices.
2. **Learn to use Git in a more professional way**: feature branches, pull requests, issues, and commit messages that follow the [Conventional Commits](https://www.conventionalcommits.org/) specification (`feat(companies): ...`, `chore: ...`).

## Tech stack

- [Laravel 13](https://laravel.com) (PHP 8.3+)
- [Livewire 4](https://livewire.laravel.com) & [Flux UI](https://fluxui.dev)
- [Laravel Fortify](https://laravel.com/docs/fortify) for authentication
- [Tailwind CSS 4](https://tailwindcss.com) & Vite
- [Pest](https://pestphp.com) for testing, Larastan and Pint for code quality
- SQLite (default)

## Roadmap

- [ ] **1. Foundation**: authentication, Company & Application CRUD, Form Requests *(in progress)*
- [ ] **2. Relationships**: contacts, follow-ups, eager loading / N+1
- [ ] **3. Authorization**: Policies (users only see their own data)
- [ ] **4. Statuses**: PHP enum, filters, query scopes
- [ ] **5. Files**: CV / cover letter uploads on a private disk
- [ ] **6. Automation**: scheduled command and queued mail notifications
- [ ] **7. Bonus**: dashboard stats, Pest feature tests, Sanctum API
- [ ] **8. Deployment**

## Getting started

Requirements: PHP 8.3+, Composer, Node.js and npm.

```bash
git clone git@github.com:NikaPink/CareerManager.git
cd CareerManager
composer setup                 # installs dependencies, creates .env, generates the key, runs migrations
php artisan db:seed            # optional: fills the database with sample data
composer dev                   # starts the server, queue, logs and Vite
```

## Git workflow

- One issue per feature, one branch per issue.
- Changes are merged into `main` through pull requests.
- Commit messages follow Conventional Commits: `type(scope): description`
  - `feat`: a new feature
  - `fix`: a bug fix
  - `chore`: maintenance (dependencies, config)
  - `refactor`, `test`, `docs`, ...

## Code quality

```bash
composer lint     # format the code with Pint
php artisan test  # run the test suite
```
