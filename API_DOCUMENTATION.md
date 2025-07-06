# API Documentation

## Overview

This is a Laravel-based event/conference website with modern frontend components using Tailwind CSS, Swiper.js, and custom JavaScript modules. The application features interactive sliders, countdown timers, modal systems, and responsive design.

## Table of Contents

1. [Backend Components](#backend-components)
2. [Frontend JavaScript Modules](#frontend-javascript-modules)
3. [Blade Components](#blade-components)
4. [Dependencies & Setup](#dependencies--setup)
5. [Usage Examples](#usage-examples)

---

## Backend Components

### User Model

**File**: `app/Models/User.php`

Laravel Eloquent model for user authentication and management.

#### Properties

- **$fillable**: `['name', 'email', 'password']` - Mass assignable attributes
- **$hidden**: `['password', 'remember_token']` - Hidden attributes for serialization
- **$casts**: Automatic casting for `email_verified_at` (datetime) and `password` (hashed)

#### Usage

```php
// Create a new user
$user = User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'password' => 'secret123'
]);

// Find user by email
$user = User::where('email', 'john@example.com')->first();

// Update user
$user->update(['name' => 'Jane Doe']);
```

### Routes

**File**: `routes/web.php`

#### Available Routes

- `GET /` - Homepage route that returns the welcome view

```php
Route::get('/', function () {
    return view('welcome');
});
```

---

## Frontend JavaScript Modules

### 1. Main Application (`app.js`)

**File**: `resources/js/app.js`

Main application entry point that initializes all Swiper carousels, tab functionality, and interactive elements.

#### Features

- **Multiple Swiper Instances**: Speakers, Partners, Reviews, Gallery, Themes, Program
- **Responsive Swiper**: Partners slider only activates on desktop (≥1024px)
- **Tab Navigation**: Dynamic tab switching
- **Mobile Menu**: Hamburger menu toggle
- **Dynamic Form Management**: Add/remove user forms
- **Mouse Follower**: Smooth cursor following animation (desktop only)

#### Swiper Configurations

```javascript
// Speakers Slider
const speakersSwiper = new Swiper('.speakers', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
        nextEl: '.speakers-button-next',
        prevEl: '.speakers-button-prev',
    }
});

// Responsive Partners Slider (desktop only)
const partnersSwiper = new Swiper('.partners', {
    loop: true,
    spaceBetween: 90,
    slidesPerView: 3,
    navigation: {
        nextEl: '.partners-button-next',
        prevEl: '.partners-button-prev',
    }
});
```

#### Tab System

```javascript
// Tab button click handler
buttons.forEach(button => {
    button.addEventListener('click', () => {
        const tabId = button.getAttribute('data-tab');
        // Toggle active states and show/hide content
    });
});
```

### 2. Timer Module (`timer.js`)

**File**: `resources/js/timer.js`

Countdown timer functionality for event deadlines.

#### API

```javascript
// HTML structure required
<div id="countdown" data-deadline="2025-09-25T23:59:00">
    <span id="months">00</span>
    <span id="days">00</span>
    <span id="hours">00</span>
    <span id="minutes">00</span>
</div>
```

#### Features

- **Real-time Updates**: Updates every minute
- **Automatic Calculation**: Months, days, hours, minutes
- **Zero Padding**: Displays "00" format
- **Auto-stop**: Clears interval when deadline reached

#### Usage

```html
<!-- Set the deadline in data attribute -->
<div id="countdown" data-deadline="2025-12-31T23:59:00">
    <div>
        <span id="months">00</span>
        <span>месяца</span>
    </div>
    <div>
        <span id="days">00</span>
        <span>дней</span>
    </div>
    <div>
        <span id="hours">00</span>
        <span>часов</span>
    </div>
    <div>
        <span id="minutes">00</span>
        <span>минут</span>
    </div>
</div>
```

### 3. Popup Module (`popup.js`)

**File**: `resources/js/popup.js`

Modal system for displaying content in popups.

#### API

```javascript
// Required HTML structure
<button class="open-modal-btn" data-modal-target="template-id">Open Modal</button>
<template id="template-id">
    <div>Modal content here</div>
</template>
<div id="modal" class="hidden">
    <div id="modal-content"></div>
    <button id="modal-close">Close</button>
</div>
```

#### Features

- **Template-based**: Uses HTML `<template>` elements
- **Multiple Triggers**: Multiple buttons can open different modals
- **Multiple Close Methods**: Click close button or click outside
- **Content Cloning**: Templates are cloned, not moved

#### Usage

```html
<!-- Trigger button -->
<button class="open-modal-btn" data-modal-target="contact-form">
    Contact Us
</button>

<!-- Template -->
<template id="contact-form">
    <div class="p-6">
        <h2>Contact Form</h2>
        <form>
            <input type="email" placeholder="Email">
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<!-- Modal container -->
<div id="modal" class="fixed inset-0 bg-black/50 hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg">
            <div id="modal-content"></div>
            <button id="modal-close">×</button>
        </div>
    </div>
</div>
```

### 4. Dynamic Adapt Module (`dinamic-adapt.js`)

**File**: `resources/js/dinamic-adapt.js`

Responsive element positioning system that moves elements between containers based on screen size.

#### Features

- **Responsive Moving**: Elements change position based on breakpoints
- **Original Position Memory**: Elements return to original position
- **Multiple Breakpoints**: Support for various screen sizes

---

## Blade Components

### 1. Timer Component

**File**: `resources/views/components/timer.blade.php`

Displays a countdown timer with styled elements.

#### Usage

```blade
<x-timer />
```

#### Features

- **Grid Layout**: 4-column responsive grid
- **Custom Styling**: Gradient backgrounds and SVG backgrounds
- **Russian Labels**: Month, days, hours, minutes in Russian
- **Asset Integration**: Uses SVG background from assets

### 2. Slider Gallery Component

**File**: `resources/views/components/slider-gallery.blade.php`

Image gallery slider with navigation controls.

#### Usage

```blade
<x-slider-gallery />
```

#### Features

- **Swiper Integration**: Uses `.gallery` class for JavaScript initialization
- **Navigation Controls**: Previous/next buttons with icons
- **Responsive Design**: Full-width with custom height
- **Gradient Styling**: Custom gradient borders and backgrounds

### 3. Slider Review Component

**File**: `resources/views/components/slider-review.blade.php`

Customer review/testimonial slider.

#### Usage

```blade
<x-slider-review />
```

#### Features

- **Review Cards**: User avatar, name, and testimonial text
- **Swiper Integration**: Uses `.reviews` class
- **Icon Integration**: User icons from icon components
- **Consistent Styling**: Matches gallery slider navigation

### 4. Hamburger Component

**File**: `resources/views/components/hamburger.blade.php`

Mobile navigation hamburger icon (SVG).

#### Usage

```blade
<x-hamburger />
```

#### Features

- **Pure SVG**: Scalable vector graphic
- **Gradient Effects**: Linear gradients and filters
- **Interactive Ready**: Designed for JavaScript toggle functionality

### 5. Icon Components

**Directory**: `resources/views/components/icons/`

Collection of SVG icon components.

#### Available Icons

- `<x-icons.arrow-left />` - Left arrow navigation
- `<x-icons.user />` - User profile icon
- `<x-icons.users />` - Multiple users icon
- `<x-icons.eye />` - Eye/visibility icon
- `<x-icons.hand-bag />` - Shopping bag icon
- `<x-icons.plus />` - Plus/add icon
- `<x-icons.power />` - Power/settings icon
- `<x-icons.cast />` - Cast/broadcast icon
- `<x-icons.360 />` - 360-degree icon
- `<x-icons.arrow-diagonal />` - Diagonal arrow icon

#### Usage

```blade
<!-- Navigation arrows -->
<x-icons.arrow-left />

<!-- User interfaces -->
<x-icons.user />
<x-icons.users />

<!-- Action icons -->
<x-icons.plus />
<x-icons.eye />
```

---

## Dependencies & Setup

### Backend Dependencies

**File**: `composer.json`

```json
{
    "require": {
        "php": "^8.2",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^2.10.1"
    }
}
```

### Frontend Dependencies

**File**: `package.json`

```json
{
    "dependencies": {
        "@tailwindcss/postcss": "^4.1.10",
        "@tailwindcss/vite": "^4.1.10",
        "swiper": "^11.2.8"
    },
    "devDependencies": {
        "autoprefixer": "^10.4.21",
        "laravel-vite-plugin": "^0.8.1",
        "postcss": "^8.5.6",
        "tailwindcss": "^4.1.10",
        "vite": "^5.2.0"
    }
}
```

### Build Commands

```bash
# Development
npm run dev

# Production build
npm run build

# Laravel development server
php artisan serve
```

---

## Usage Examples

### 1. Complete Page with All Components

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Conference</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="flex items-center justify-between p-4">
        <div>Logo</div>
        <button id="hamburger" class="lg:hidden">
            <x-hamburger />
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="max-h-0 overflow-hidden transition-all">
        <div class="p-4">
            <a href="#speakers">Speakers</a>
            <a href="#program">Program</a>
        </div>
    </div>

    <!-- Timer Section -->
    <section class="py-12">
        <h2>Event Countdown</h2>
        <x-timer />
    </section>

    <!-- Gallery Section -->
    <section class="py-12">
        <h2>Photo Gallery</h2>
        <x-slider-gallery />
    </section>

    <!-- Reviews Section -->
    <section class="py-12">
        <h2>Testimonials</h2>
        <x-slider-review />
    </section>

    <!-- Tabs Section -->
    <section class="py-12">
        <div class="flex gap-4 mb-8">
            <button class="tab-button text-white" data-tab="tab1">Tab 1</button>
            <button class="tab-button text-white/60" data-tab="tab2">Tab 2</button>
        </div>
        <div id="tab1" class="tab-content">Content 1</div>
        <div id="tab2" class="tab-content hidden">Content 2</div>
    </section>

    <!-- Modal Trigger -->
    <button class="open-modal-btn" data-modal-target="registration">
        Register Now
    </button>

    <!-- Modal Template -->
    <template id="registration">
        <div class="p-6">
            <h3>Registration Form</h3>
            <form>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </template>

    <!-- Modal Container -->
    <div id="modal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg relative">
            <button id="modal-close" class="absolute top-2 right-2">×</button>
            <div id="modal-content"></div>
        </div>
    </div>

    <!-- Mouse Follower (Desktop) -->
    <div id="follower" class="fixed w-80 h-80 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 opacity-20 pointer-events-none z-10"></div>
</body>
</html>
```

### 2. Dynamic Form Management

```blade
<form>
    <div class="user-data">
        <p class="text-sm mb-2">Участник №1</p>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <div class="phone">
            <input type="tel" placeholder="Phone">
        </div>
    </div>
    
    <button type="button" class="add-user">
        <x-icons.plus /> Add Another Participant
    </button>
</form>
```

### 3. Swiper Slider Setup

```blade
<!-- Custom Slider -->
<div class="swiper custom-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
    </div>
</div>

<!-- Navigation -->
<div class="flex justify-center gap-4 mt-4">
    <button class="custom-slider-button-prev">
        <x-icons.arrow-left />
    </button>
    <button class="custom-slider-button-next">
        <x-icons.arrow-left class="rotate-180" />
    </button>
</div>

<script>
// Initialize custom slider
new Swiper('.custom-slider', {
    loop: true,
    navigation: {
        nextEl: '.custom-slider-button-next',
        prevEl: '.custom-slider-button-prev',
    },
    breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    }
});
</script>
```

---

## Browser Compatibility

- **Modern Browsers**: Chrome 90+, Firefox 88+, Safari 14+, Edge 90+
- **Mobile**: iOS Safari 14+, Chrome Mobile 90+
- **JavaScript**: ES6+ features used (requires modern browser support)

## Performance Considerations

- **Swiper.js**: Only initializes when elements are present
- **Responsive Handling**: Media queries prevent unnecessary initialization
- **Timer Updates**: Optimized to update only every minute
- **Mouse Follower**: Desktop-only to preserve mobile performance

## Accessibility Features

- **Keyboard Navigation**: Tab-accessible buttons and forms
- **Screen Reader Support**: Semantic HTML structure
- **Focus Management**: Proper focus handling in modals
- **ARIA Labels**: Icon components should include aria-label attributes

---

This documentation covers all public APIs, components, and functions available in the application. Each component is designed to be modular and reusable across different parts of the site.