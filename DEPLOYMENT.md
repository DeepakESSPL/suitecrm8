# SuiteCRM 8 - Deployment Guide

## Environment Configuration Strategy

This project uses a multi-layered configuration approach:

### 1. **Symfony Configuration** (.env files)
- `.env` - Default values (committed to git)
- `.env.local` - Local development overrides (git-ignored)
- `.env.production` - Production template (committed to git)
- `.env.staging` - Staging template (committed to git)

### 2. **Legacy SuiteCRM Configuration** (config files)
- `config.php` - Base configuration (committed to git)
- `config_override.php` - Environment-specific overrides (git-ignored)
- `config_override.php.production` - Production template (committed to git)
- `config_override.php.staging` - Staging template (committed to git)

---

## Local Development Setup

Your local development is already configured:
- Database: `suitecrm8` with user `root` / password `deepak`
- URL: `http://suitecrm8.local`
- Files: `.env.local` and `config_override.php` (both git-ignored)

---

## Staging Server Deployment

### Step 1: Deploy Code
```bash
git pull origin staging  # or your staging branch
```

### Step 2: Configure Symfony (.env)
```bash
# Copy and customize the staging environment file
cp .env.staging .env.staging.local

# Edit with your actual staging credentials
nano .env.staging.local
```

Update these values:
- `DATABASE_URL` - Staging database credentials
- `SITE_URL` - Your staging domain
- `APP_SECRET` - Generate unique secret

### Step 3: Configure Legacy SuiteCRM
```bash
# Copy the staging template
cp public/legacy/config_override.php.staging public/legacy/config_override.php

# Edit with your actual staging credentials
nano public/legacy/config_override.php
```

Update:
- Database credentials
- `site_url`

### Step 4: Set Permissions
```bash
chmod 640 .env.staging.local
chmod 640 public/legacy/config_override.php
chown www-data:www-data .env.staging.local
chown www-data:www-data public/legacy/config_override.php
```

### Step 5: Clear Caches
```bash
rm -rf cache/prod/*
php bin/console cache:clear --env=prod
```

---

## Production Server Deployment

### Step 1: Deploy Code
```bash
git pull origin main  # or your production branch
```

### Step 2: Configure Symfony (.env)
```bash
# Copy and customize the production environment file
cp .env.production .env.production.local

# Edit with your actual production credentials
nano .env.production.local
```

Update these values:
- `DATABASE_URL` - Production database credentials
- `SITE_URL` - Your production domain
- `APP_SECRET` - Generate unique secret (NEVER use the same as staging/dev)

### Step 3: Configure Legacy SuiteCRM
```bash
# Copy the production template
cp public/legacy/config_override.php.production public/legacy/config_override.php

# Edit with your actual production credentials
nano public/legacy/config_override.php
```

Update:
- Database credentials (`crm` / `Crm@2025$!` / `crm_suitecrm` by default)
- `site_url`

### Step 4: Set Strict Permissions
```bash
chmod 400 .env.production.local  # Read-only
chmod 400 public/legacy/config_override.php  # Read-only
chown www-data:www-data .env.production.local
chown www-data:www-data public/legacy/config_override.php
```

### Step 5: Clear Caches & Optimize
```bash
rm -rf cache/prod/*
php bin/console cache:clear --env=prod --no-debug
composer dump-autoload --optimize --classmap-authoritative
```

---

## Important Security Notes

1. **NEVER commit these files to git:**
   - `.env.local`
   - `.env.staging.local`
   - `.env.production.local`
   - `config_override.php`

2. **Generate Unique APP_SECRET for each environment:**
   ```bash
   php -r "echo bin2hex(random_bytes(16)).PHP_EOL;"
   ```

3. **Database Passwords:**
   - Use strong, unique passwords for each environment
   - NEVER use the same password across environments

4. **File Permissions:**
   - Staging: `640` (owner read/write, group read)
   - Production: `400` (owner read-only)

---

## Configuration Priority

The configuration loading order is:

### For Symfony:
1. `.env` (base, committed)
2. `.env.local` (local overrides, git-ignored)
3. `.env.$APP_ENV` (environment-specific, committed)
4. `.env.$APP_ENV.local` (environment overrides, git-ignored)

### For Legacy SuiteCRM:
1. `config.php` (base configuration, committed)
2. `config_override.php` (environment-specific, git-ignored)

Later files override earlier ones.

---

## Verification Checklist

After deployment, verify:

- [ ] Website loads correctly
- [ ] Database connection works
- [ ] No error logs in `logs/prod/`
- [ ] File permissions are restrictive
- [ ] Config files are not web-accessible
- [ ] `.env.*.local` and `config_override.php` exist and are git-ignored
- [ ] Caches are cleared

---

## Troubleshooting

### Issue: "Access denied for user 'crm'@'localhost'"
**Solution:** Check `config_override.php` database credentials match your server

### Issue: "Site URL mismatch"
**Solution:** Update `site_url` in `config_override.php` to match your domain

### Issue: Cache errors
**Solution:** Clear all caches:
```bash
rm -rf cache/prod/* public/legacy/cache/*
php bin/console cache:clear --env=prod
```

### Issue: Config file not loading
**Solution:** Verify file permissions and ownership:
```bash
ls -la public/legacy/config_override.php
ls -la .env.production.local
```

---

## Quick Reference

| Environment | Database User | Database Name | Config Files |
|------------|---------------|---------------|--------------|
| **Local** | root | suitecrm8 | `.env.local` + `config_override.php` |
| **Staging** | staging_user | staging_suitecrm | `.env.staging.local` + `config_override.php` |
| **Production** | crm | crm_suitecrm | `.env.production.local` + `config_override.php` |

All `*.local` files and `config_override.php` are git-ignored and must be created on each server.
