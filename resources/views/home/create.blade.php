<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messagess.booking_system') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'IBM Plex Sans Arabic', sans-serif !important;
            background-color: #f8f6f1;
            color: #333;
        }

        /* Header Styles */
        .header {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #C8A882, #D4B896);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #C8A882;
        }

        .logo-subtitle {
            font-size: 12px;
            color: #666;
            margin-top: -5px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .language-btn {
            background: none;
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-btn {
            background: #C8A882;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-btn:hover {
            background: #B8986F;
        }

        /* Main Container */
        .container {
            width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
            display: flex;
            gap: 30px;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            height: fit-content;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .step:last-child {
            border-bottom: none;
        }

        .step.active {
            color: #C8A882;
            background: rgba(200, 168, 130, 0.1);
            margin: 0 -20px;
            padding: 15px 20px;
            border-radius: 10px;
        }

        .step-number {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #C8A882;
        }

        .step.active .step-number {
            background: #C8A882;
        }

        .step:not(.active) .step-number {
            background: #ddd;
        }

        /* Content Area */
        .content {
            flex: 1;
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Progress Bar */
        .progress-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            gap: 10px;
        }

        .progress-step {
            white-space: nowrap;
            padding: 8px 20px;
            border-radius: 25px;
            background: #e9ecef;
            color: #6c757d;
            font-size: 14px;
            min-width: 100px;
            text-align: center;
        }

        .progress-step.active {
            background: #C8A882;
            color: white;
        }

        .progress-step.completed {
            background: #28a745;
            color: white;
        }

        /* Gender Selection */
        .gender-selection {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 50px 0;
        }

        .gender-card {
            background: rgba(224, 247, 250, 0.5);
            border: 2px solid transparent;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 200px;
        }

        .gender-card:hover {
            border-color: #C8A882;
            transform: translateY(-5px);
        }

        .gender-card.selected {
            border-color: #C8A882;
            background: rgba(200, 168, 130, 0.1);
        }

        .gender-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .gender-icon.male {
            background: linear-gradient(135deg, #4a90e2, #7b68ee);
        }

        .gender-icon.female {
            background: linear-gradient(135deg, #ff6b9d, #c44569);
        }

        /* Service Grid */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .service-card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            border-color: #C8A882;
            transform: translateY(-5px);
        }

        .service-card.selected {
            border-color: #C8A882;
            background: rgba(200, 168, 130, 0.1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
        }

        .service-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }

        /* Staff Selection */
        .staff-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 40px 0;
            flex-wrap: wrap;
        }

        .staff-card {
            background: rgba(224, 247, 250, 0.3);
            border: 2px solid transparent;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 200px;
        }

        .staff-card:hover {
            border-color: #C8A882;
            transform: translateY(-5px);
        }

        .staff-card.selected {
            border-color: #C8A882;
            background: rgba(200, 168, 130, 0.1);
        }

        .staff-avatar {
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            border: 4px solid white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .staff-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        /* Time Slots */
        .time-slots {
            margin-top: 30px;
        }

        .time-period {
            margin-bottom: 20px;
        }

        .time-period-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #666;
        }

        .time-grid {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .time-slot {
            padding: 8px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
        }

        .time-slot:hover {
            border-color: #C8A882;
        }

        .time-slot.selected {
            background: #C8A882;
            color: white;
            border-color: #C8A882;
        }

        /* Calendar */
        .calendar {
            background: #C8A882;
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-nav {
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
        }

        .calendar-title {
            font-size: 20px;
            font-weight: bold;
        }

        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 10px;
        }

        .calendar-weekday {
            text-align: center;
            padding: 10px 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day {
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.1);
        }

        .calendar-day:hover {
            background: rgba(255,255,255,0.2);
        }

        .calendar-day.selected {
            background: white;
            color: #C8A882;
            font-weight: bold;
        }

        .calendar-day.other-month {
            opacity: 0.5;
        }

        /* Service Detail */
        .service-detail {
            display: flex;
            gap: 30px;
            align-items: center;
            margin: 40px 0;
        }

        .service-image {
            width: 300px;
            height: 200px;
            border-radius: 15px;
            background-size: cover;
            background-position: center;
        }

        .service-info {
            flex: 1;
        }

        .service-info h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .service-info p {
            color: #666;
            line-height: 1.6;
            font-size: 16px;
        }

        /* Location Form */
        .location-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #C8A882;
        }

        /* Navigation Buttons */
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #C8A882;
            color: white;
        }

        .btn-primary:hover {
            background: #B8986F;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 0 12px;
                gap: 20px;
            }

            .sidebar {
                width: 100%;
                border-radius: 16px;
                padding: 16px;
                margin-bottom: 20px;
            }

            .step {
                padding: 14px 20px;
                font-size: 1rem;
            }

            .step.active {
                border-radius: 10px;
            }

            .header-container {
                flex-direction: column;
                gap: 10px;
                padding: 0 12px;
            }

            .logo {
                justify-content: center;
            }

            .header-right {
                justify-content: center;
                flex-wrap: wrap;
            }

            .content {
                padding: 20px 15px;
            }

            .progress-bar {
                flex-wrap: wrap;
                gap: 6px;
            }

            .progress-step {
                font-size: 12px;
                min-width: auto;
                padding: 6px 12px;
            }

            .gender-selection {
                flex-direction: column;
                gap: 16px;
                margin: 30px 0;
            }

            .gender-card {
                min-width: 100%;
                padding: 25px;
            }

            .service-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .staff-grid {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .staff-card {
                width: 100%;
            }

            .calendar {
                padding: 20px;
                border-radius: 12px;
            }

            .calendar-header {
                flex-direction: column;
                gap: 10px;
            }

            .calendar-title {
                font-size: 18px;
            }

            .calendar-weekdays,
            .calendar-days {
                gap: 3px;
            }

            .service-detail {
                flex-direction: column;
                gap: 20px;
            }

            .service-image {
                width: 100%;
                height: 180px;
            }

            .form-row {
                flex-direction: column;
                gap: 10px;
            }

            .form-group input,
            .form-group select {
                font-size: 1rem;
                padding: 10px;
            }

            .navigation {
                flex-direction: column-reverse;
                gap: 10px;
            }

            .btn {
                width: 100%;
                padding: 12px;
                font-size: 1rem;
            }

            .massage-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .massage-card {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .logo-text {
                font-size: 20px;
            }

            .logo-subtitle {
                font-size: 10px;
            }

            .step {
                font-size: 0.95rem;
                gap: 10px;
                padding: 12px 18px;
            }

            .calendar-title {
                font-size: 16px;
            }

            .gender-icon,
            .service-icon,
            .staff-avatar {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }

            .form-group label {
                font-size: 0.95rem;
            }

            .progress-step {
                font-size: 11px;
                padding: 5px 10px;
            }
        }

        @media (max-width: 360px) {
            .header-container {
                padding: 0 8px;
            }

            .step {
                font-size: 0.85rem;
                padding: 10px 14px;
            }

            .btn {
                font-size: 0.95rem;
            }

            .gender-card,
            .staff-card {
                padding: 20px;
            }

            .form-group input,
            .form-group select {
                font-size: 0.95rem;
                padding: 10px;
            }

            .calendar {
                padding: 15px;
            }

            .calendar-title {
                font-size: 15px;
            }
        }
        /* Hidden class */
        .hidden {
            display: none !important;
        }

        /* Special styling for massage service cards */
        .massage-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .massage-card {
            background: rgba(248, 246, 241, 0.3);
            border: 2px solid #C8A882;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .massage-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(200, 168, 130, 0.2);
        }

        .massage-card.selected {
            background: rgba(200, 168, 130, 0.1);
        }

        .massage-duration {
            background: rgba(200, 168, 130, 0.1);
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            color: #C8A882;
            margin-bottom: 10px;
            display: inline-block;
        }

        .massage-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .massage-location {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .massage-price {
            font-size: 16px;
            color: #C8A882;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .massage-book-btn {
            background: #C8A882;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: all 0.3s ease;
        }

        .massage-book-btn:hover {
            background: #B8986F;
        }

        .most-wanted {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ffc107;
            color: #333;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 10px;
            font-weight: bold;
            transform: rotate(15deg);
        }
        @keyframes fadeDown {
            0% { opacity: 0; transform: translateY(-40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .language-btn:hover {
            background: #bc9a69;
            color: #fff;
        }
        .sidebar {
            width: 260px;
            background: #fff;
            border-radius: 22px;
            padding: 24px 0 24px 0;
            box-shadow: 0 4px 24px #bc9a6920;
            height: fit-content;
            margin-top: 0;
            animation: fadeInRight 0.8s cubic-bezier(.4,1.6,.6,1);
        }
        @keyframes fadeInRight {
            0% { opacity: 0; transform: translateX(-40px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        .step {
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px 32px;
            border-bottom: 1px solid #f3e6d7;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 1.13rem;
            color: #b6a07a;
            background: transparent;
            position: relative;
        }
        .step:last-child { border-bottom: none; }
        .step.active {
            color: #fff;
            background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
            margin: 0;
            border-radius: 0 30px 30px 0;
            font-weight: bold;
            box-shadow: 0 4px 18px #bc9a6920;
            animation: stepPulse 0.5s;
        }
        @keyframes stepPulse {
            0% { box-shadow: 0 0 0 0 #bc9a6940; }
            70% { box-shadow: 0 0 0 10px #bc9a6920; }
            100% { box-shadow: 0 4px 18px #bc9a6920; }
        }
        .step-number {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #e2c89c;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px #bc9a6920;
            transition: background 0.3s;
        }
        .step.active .step-number {
            background: #fff;
            border: 2px solid #bc9a69;
        }
        .step:hover:not(.active) {
            background: #f7f3ee;
            color: #bc9a69;
            transform: translateX(6px) scale(1.03);
        }
        .service-card.selected {
            border-color: #C8A882;
            background: rgba(200, 168, 130, 0.1);
            border: 2px solid #bc9a69;
        }
        #step1 {
            animation: fadeInUp 0.7s cubic-bezier(.4,1.6,.6,1);
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #bc9a6920;
            padding: 32px 24px 24px 24px;
            margin-bottom: 32px;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px);}
            100% { opacity: 1; transform: translateY(0);}
        }

        .location-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1.08rem;
            color: #bc9a69;
            margin-bottom: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        input, select {
            border: 1.5px solid #e2c89c;
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 1.1rem;
            margin-bottom: 6px;
            background: #faf8f5;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 4px #bc9a6920;
        }

        input:focus, select:focus {
            border-color: #bc9a69;
            outline: none;
            background: #fff;
            box-shadow: 0 2px 12px #bc9a6920;
        }

        @media (max-width: 700px) {
            .form-row { flex-direction: column; gap: 0; }
            #step1 { padding: 18px 6px; }
        }
        .image-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 8px;
            overflow: hidden;
            border-radius: 50%;
            background: #ddd;
        }

    </style>
</head>
<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="{{ app()->getLocale() }}">
<header class="header" style="box-shadow: 0 4px 24px #bc9a6920; border-radius: 0 0 36px 36px; padding: 20px 0 0; text-align: center; position: relative; overflow: hidden;">
    <div class="header-container" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; padding: 0 20px;">

        <!-- الشعار -->
        <div class="logo" style="display: flex; align-items: center; gap: 12px; animation: fadeDown 0.8s cubic-bezier(.4,1.6,.6,1);">
            <a href="/">
                <img src="/logo.webp" alt="JO SPA Logo" style="height: 60px; width: auto; border-radius: 12px; object-fit: contain;">
            </a>
        </div>

        <!-- العنوان -->
        <div class="header-title" style="animation: fadeUp 0.9s cubic-bezier(.4,1.6,.6,1);">
            <h2 style="font-size: 2.2rem; color: #a8834b; font-weight: bold; letter-spacing: 1.5px; margin: 0;">{{ __('messagess.home_booking') }}</h2>
        </div>

        <!-- زر اللغة -->
        <div class="header-right">
            <li class="nav-item list-unstyled">
                @php
                    $currentLocale = session('locale', app()->getLocale());
                    $targetLocale = $currentLocale === 'ar' ? 'en' : 'ar';
                    $translationKey = $targetLocale === 'ar' ? 'messagess.nav_lang_ar' : 'messagess.nav_lang_en';
                @endphp

                <form id="change-lang-form" action="{{ route('change.lang', $targetLocale) }}" method="GET" style="display: none;"></form>

                <button type="button"
                        onclick="document.getElementById('change-lang-form').submit();"
                        class="btn btn-sm btn-outline-light rounded-pill px-3 fw-semibold"
                        style="transition: 0.3s;">
                    {{ __($translationKey) }}
                </button>
            </li>
        </div>


    </div>
</header>


<div class="container">
    <div class="sidebar">
        <div class="step active" data-step="1">
            <div class="step-number"></div>
            <span>{{ __('messagess.location') }}</span>
        </div>
        <!--<div class="step" data-step="2">-->
        <!--    <div class="step-number"></div>-->
    <!--    <span>{{ __('messagess.gender') }}</span>-->
        <!--</div>-->
        <div class="step" data-step="3">
            <div class="step-number"></div>
            <span>{{ __('messagess.group') }}</span>
        </div>
        <div class="step" data-step="4">
            <div class="step-number"></div>
            <span>{{ __('messagess.service') }}</span>
        </div>
        <div class="step" data-step="5">
            <div class="step-number"></div>
            <span>{{ __('messagess.date') }}</span>
        </div>
        <div class="step" data-step="6">
            <div class="step-number"></div>
            <span>{{ __('messagess.staff') }}</span>
        </div>
        <div class="step" data-step="7">
            <div class="step-number"></div>
            <span>{{ __('messagess.time') }}</span>
        </div>
        <div class="step" data-step="8">
            <div class="step-number"></div>
            <span>{{ __('messagess.cart') }}</span>
        </div>
    </div>

    <div class="content">
        <div class="progress-bar">
            <div class="progress-step active">{{ __('messagess.location') }}</div>
        <!--<div class="progress-step">{{ __('messagess.gender') }}</div>-->
            <div class="progress-step">{{ __('messagess.group') }}</div>
            <div class="progress-step">{{ __('messagess.service') }}</div>
            <div class="progress-step">{{ __('messagess.date') }}</div>
            <div class="progress-step">{{ __('messagess.staff') }}</div>
            <div class="progress-step">{{ __('messagess.time') }}</div>
            <div class="progress-step">{{ __('messagess.cart') }}</div>
        </div>

        {{-- Step 1  --}}
        <div id="step1" class="step-content">
            <div class="location-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>{{ __('messagess.service_for_name') }}</label>
                        <input type="text" id="customerName" placeholder="{{ __('messagess.name') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('messagess.mobile_no') }}</label>
                        <input type="tel" id="mobileNo" placeholder="09*********">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>{{ __('messagess.neighbor') }}</label>
                        <select id="neighborhood">
                            <option value="">{{ __('messagess.please_select') }}</option>
                            <option value="manfuha">{{ __('messagess.manfuha') }}</option>
                            <option value="al-wasila">{{ __('messagess.al_wasila') }}</option>
                            <option value="ghobeira">{{ __('messagess.ghobeira') }}</option>
                            <option value="ad-doubiya">{{ __('messagess.ad_doubiya') }}</option>
                            <option value="maakal">{{ __('messagess.maakal') }}</option>
                            <option value="al-qura">{{ __('messagess.al_qura') }}</option>
                            <option value="al-murabba">{{ __('messagess.al_murabba') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    <!-- {{-- Step 2  --}}-->
        <!--<div id="step2" class="step-content hidden">-->
        <!--    <div class="gender-selection">-->
        <!--<div class="gender-card" data-gender="men">-->
        <!--    <div class="gender-icon male">👨‍💼</div>-->
    <!--    <h3>{{ __('messagess.men') }}</h3>-->
    <!--    <p>{{ __('messagess.men_services') }}</p>-->
        <!--</div>-->
        <!--        <div class="gender-card" data-gender="women">-->
        <!--            <div class="gender-icon female">👩‍💼</div>-->
    <!--            <h3>{{ __('messagess.women') }}</h3>-->
    <!--            <p>{{ __('messagess.women_services') }}</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        {{-- Step 3  --}}
        <div id="step3" class="step-content hidden">
            <div class="service-grid">
                dynamic services
            </div>
        </div>

        {{-- Step 4  --}}
        <div id="step4" class="step-content hidden">
            <div class="massage-cards"></div>
        </div>

        {{-- Step 5  --}}
        <div id="step5" class="step-content hidden">
            <div class="calendar">
                <div class="calendar-header">
                    <button class="calendar-nav" id="prevMonth">‹</button>
                    <div class="calendar-title" id="calendarTitle">{{ __('messagess.july') }}</div>
                    <button class="calendar-nav" id="nextMonth">›</button>
                </div>
                <div class="calendar-weekdays">
                    <div class="calendar-weekday">{{ __('messagess.sunday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.monday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.tuesday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.wednesday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.thursday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.friday') }}</div>
                    <div class="calendar-weekday">{{ __('messagess.saturday') }}</div>
                </div>
                <div class="calendar-days" id="calendarDays"></div>
            </div>
        </div>

        {{-- Step 6  --}}
        <div id="step6" class="step-content hidden">
            <div id="staffGrid" class="staff-grid"></div>
        </div>

    {{-- Step 7  --}}
    <!-- Time Slots -->
        <div id="step7" class="step-content hidden">
            <div class="time-slots">
                <div class="time-period">
                    <div class="time-period-title">{{ __('messagess.select_time') }}</div>

                    {{-- قبل الظهر --}}
                    <div class="time-section">
                        <h4>{{ __('messagess.morning') }}</h4>
                        <div class="time-grid">
                            @for ($hour = 0; $hour < 12; $hour++)
                                @for ($min = 0; $min < 60; $min += 30)
                                    @php
                                        $time = \Carbon\Carbon::createFromTime($hour, $min);
                                        $label = $time->format('h:i A'); // 01:30 AM
                                    @endphp
                                    <div class="time-slot" data-time="{{ $time->format('H:i') }}">{{ $label }}</div>
                                @endfor
                            @endfor
                        </div>
                    </div>

                    {{-- بعد الظهر --}}
                    <div class="time-section mt-4">
                        <h4>{{ __('messagess.afternoon') }}</h4>
                        <div class="time-grid">
                            @for ($hour = 12; $hour < 24; $hour++)
                                @for ($min = 0; $min < 60; $min += 30)
                                    @php
                                        $time = \Carbon\Carbon::createFromTime($hour, $min);
                                        $label = $time->format('h:i A'); // 01:30 PM
                                    @endphp
                                    <div class="time-slot" data-time="{{ $time->format('H:i') }}">{{ $label }}</div>
                                @endfor
                            @endfor
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="step-content hidden" id="summaryCard">dddddddddddddddddddddddddddddddddddddddd</div>

        <div class="navigation">
            <button class="btn btn-secondary" id="prevBtn" disabled>{{ __('messagess.previous') }}</button>
            <button class="btn btn-primary" id="nextBtn" data-next="{{ __('messagess.next') }}"data-complete="{{ __('messagess.complete') }}"></button>
        </div>
    </div>
</div>

<form id="bookingForm" action="{{ route('cart.store') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="customer_id" id="inputCustomerId">
    <input type="hidden" name="n_name" id="inputCustomerName">
    <input type="hidden" name="mobile_no" id="inputMobileNo">
    <input type="hidden" name="neighborhood" id="inputNeighborhood">
    <input type="hidden" name="gender" id="inputGender">
    <input type="hidden" name="service_group_id" id="inputServiceGroup">
    <input type="hidden" name="service_id" id="inputServiceId">
    <input type="hidden" name="date" id="inputDate">
    <input type="hidden" name="time" id="inputTime">
    <input type="hidden" name="staff_id" id="inputStaffId">
    <input type="hidden" name="status" id="inputStatus">
    <input type="hidden" name="agreed" id="inputAgreed">
    <input type="hidden" name="auto_change_staff" id="inputAutoChangeStaff">
</form>
<style>
    .service-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    .service-card {
        padding: 10px;
        border: 1px solid #ccc;
        cursor: pointer;
        text-align: center;
    }
    .service-card.selected {
        border-color: #007bff;
        background-color: #eef6ff;
    }
</style>

<div class="service-grid"></div>

<script>
    // DOM Elements
    const steps = document.querySelectorAll('.step');
    const stepContents = document.querySelectorAll('.step-content');
    const progressSteps = document.querySelectorAll('.progress-step');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Application State
    let currentStep = 1;
    let maxSteps = 7;
    let selectedData = {
        gender: null,
        location: {},
        service: null,
        massage: null,
        date: null,
        staff: null,
        time: null
    };

    // Initialize Calendar
    let currentDate = new Date();
    let selectedDate = null;

    function initializeApp() {

        updateUI();
        setupEventListeners();
        generateCalendar();


    }

    function updateUI() {
        // Update sidebar
        steps.forEach((step, index) => {
            step.classList.toggle('active', index + 1 === currentStep);
        });

        // Update progress bar
        progressSteps.forEach((step, index) => {
            step.classList.remove('active', 'completed');
            if (index + 1 < currentStep) {
                step.classList.add('completed');
            } else if (index + 1 === currentStep) {
                step.classList.add('active');
            }
        });

        // Update step content
        stepContents.forEach((content, index) => {
            content.classList.toggle('hidden', index + 1 !== currentStep);
        });

        // Update navigation buttons
        prevBtn.disabled = currentStep === 1;
        nextBtn.textContent = currentStep === maxSteps ? nextBtn.dataset.complete : nextBtn.dataset.next;
    }

    function setupEventListeners() {
        // Navigation buttons
        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateUI();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (validateCurrentStep()) {
                if (currentStep < maxSteps) {
                    currentStep++;
                    updateUI();
                } else {
                    completeBooking();
                }
            }
        });

        // Gender selection
        document.querySelectorAll('.gender-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.gender-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                selectedData.gender = card.dataset.gender;
                fetchServiceGroups(selectedData.gender);

            });
        });

        // Service selection
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.service-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                selectedData.service = card.dataset.service;

                fetchServicesByGroup(selectedData.service);

            });
        });

        // Massage selection
        document.querySelectorAll('.massage-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.massage-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                selectedData.massage = card.dataset.massage;
            });
        });

        // Staff selection
        document.querySelectorAll('.staff-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.staff-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                selectedData.staff = card.dataset.staff;
            });
        });

        // Time slot selection
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('click', () => {
                document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                slot.classList.add('selected');
                selectedData.time = slot.textContent;
            });
        });

        // Calendar navigation
        document.getElementById('prevMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar();
        });

        // Sidebar step navigation
        steps.forEach((step, index) => {
            step.addEventListener('click', () => {
                if (index + 1 <= currentStep || index === 0) {
                    currentStep = index + 1;
                    updateUI();
                }
            });
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        fetchServiceGroups(); // سيتم تحميل الخدمات تلقائيًا
    });
    function fetchServiceGroups() {
        fetch(`/service-groups/1`)
            .then(response => response.json())
            .then(data => {
                const serviceGrid = document.querySelector('.service-grid');
                serviceGrid.innerHTML = ''; // Clear previous content

                data.forEach(service => {
                    const card = document.createElement('div');
                    card.className = 'service-card';
                    card.dataset.service = service.id;
                    card.innerHTML = `
                    <div class="image-wrapper">
                        <img src="${service.image}" alt="${service.name}" style="width:100px; hieght:100px;">
                    </div>
                    <h4>${service.name}</h4>
                `;

                    card.addEventListener('click', () => {
                        document.querySelectorAll('.service-card').forEach(c => c.classList.remove('selected'));
                        card.classList.add('selected');
                        selectedData.service = card.dataset.service;

                        fetchServicesByGroup(selectedData.service);

                    });

                    serviceGrid.appendChild(card);
                });
            })
            .catch(error => {
                console.error('Error fetching services:', error);
            });
    }

    function fetchServicesByGroup(serviceGroupId) {
        fetch(`/services/${serviceGroupId}`)
            .then(response => response.json())
            .then(data => {
                const massageContainer = document.querySelector('.massage-cards');
                massageContainer.innerHTML = '';

                data.forEach(service => {
                    const card = document.createElement('div');
                    card.className = 'massage-card';
                    card.dataset.massage = service.id;

                    card.innerHTML = `
                    ${service.mostWanted ? `<div class="most-wanted">MOST WANTED</div>` : ''}
                    <div class="massage-duration">${service.duration} Minutes</div>
                    <div class="massage-name">${service.name}</div>
                    <div class="massage-location">${service.location}</div>
                    <div class="massage-price">${service.price} SAR</div>
                    <button class="massage-book-btn">Book Now</button>
                `;

                    // حدث على الكارد: اختيار الخدمة
                    card.addEventListener('click', (e) => {
                        // إذا تم الضغط على الزر "Book Now"، لا تكمل تفعيل الكارد مرتين
                        if (e.target.classList.contains('massage-book-btn')) return;

                        document.querySelectorAll('.massage-card').forEach(c => c.classList.remove('selected'));
                        card.classList.add('selected');
                        selectedData.massage = card.dataset.massage;
                    });

                    // حدث مخصص على زر "Book Now"
                    card.querySelector('.massage-book-btn').addEventListener('click', () => {
                        // فعل تحديد الكارد
                        document.querySelectorAll('.massage-card').forEach(c => c.classList.remove('selected'));
                        card.classList.add('selected');
                        selectedData.massage = card.dataset.massage;

                        // فعل الزر التالي
                        document.getElementById('nextBtn').click();

                        // تحميل الموظفين
                        fetchStaffMembers();
                    });

                    massageContainer.appendChild(card);
                });
            })
            .catch(error => {
                console.error('Error fetching services:', error);
            });
    }

    function fetchStaffMembers() {
        fetch('/staff')
            .then(response => response.json())
            .then(data => {
                const staffGrid = document.getElementById('staffGrid');
                if (!staffGrid) {
                    console.error('ما في عنصر بالـ id = "staffGrid"');
                    return;
                }
                staffGrid.innerHTML = ''; // clear old cards

                data.forEach(staff => {
                    const card = document.createElement('div');
                    card.className = 'staff-card';
                    card.dataset.staff = staff.id;
                    console.log(staff);
                    const fullName = staff.full_name || `${staff.first_name || ''} ${staff.last_name || ''}`;
                    const initials = fullName.trim().split(' ').map(word => word[0]).join('').substring(0, 2).toUpperCase();

                    card.innerHTML = `
        <div class="staff-avatar" style="background: linear-gradient(45deg, ${staff.color1 || '#4a90e2'}, ${staff.color2 || '#7b68ee'}); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
            ${initials}
        </div>
        <div class="staff-name">${fullName}</div>
    `;

                    card.addEventListener('click', () => {
                        document.querySelectorAll('.staff-card').forEach(c => c.classList.remove('selected'));
                        card.classList.add('selected');
                        selectedData.staff = staff.id;
                        fetchAvailableTimes();
                    });

                    staffGrid.appendChild(card);
                });
            })
            .catch(error => {
                console.error('Error fetching staff:', error);
            });
    }
    function generateCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        // Update calendar title
        const months = ['{{ __("messagess.january") }}', '{{ __("messagess.february") }}', '{{ __("messagess.march") }}', '{{ __("messagess.april") }}', '{{ __("messagess.may") }}', '{{ __("messagess.june") }}',
            '{{ __("messagess.july") }}', '{{ __("messagess.august") }}', '{{ __("messagess.september") }}', '{{ __("messagess.october") }}', '{{ __("messagess.november") }}', '{{ __("messagess.december") }}'];
        document.getElementById('calendarTitle').textContent = `${months[month]} ${year}`;

        // Generate calendar days
        const daysContainer = document.getElementById('calendarDays');
        daysContainer.innerHTML = '';

        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const startDate = new Date(firstDay);
        startDate.setDate(startDate.getDate() - firstDay.getDay());

        for (let i = 0; i < 42; i++) {
            const date = new Date(startDate);
            date.setDate(startDate.getDate() + i);

            const dayElement = document.createElement('div');
            dayElement.className = 'calendar-day';
            dayElement.textContent = date.getDate();

            if (date.getMonth() !== month) {
                dayElement.classList.add('other-month');
            }

            if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
                dayElement.classList.add('selected');
            }

            dayElement.addEventListener('click', () => {
                document.querySelectorAll('.calendar-day').forEach(d => d.classList.remove('selected'));
                dayElement.classList.add('selected');
                selectedDate = new Date(date);
                selectedData.date = selectedDate;
            });

            daysContainer.appendChild(dayElement);
        }
    }

    function fetchAvailableTimes() {
        const date = selectedData.date.toISOString().split('T')[0];
        const staffId = selectedData.massage;

        const apiUrl = `/available/${date}/${staffId}`;
        console.log('Fetching available times from:', apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const container = document.querySelector('#time');

                if (!container) {
                    console.error('❌ .time-slots-container not found in the page.');
                    return;
                }

                container.innerHTML = '';

                data.forEach(time => {
                    const slot = document.createElement('div');
                    slot.className = 'time-slot';
                    slot.textContent = time;
                    slot.addEventListener('click', () => {
                        document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                        slot.classList.add('selected');
                        selectedData.time = time;

                    });

                    container.appendChild(slot);
                });
            })
            .catch(err => console.error('Error fetching times:', err));


    }

    function showBookingSummary() {
        const bookingData = {
            n_name: document.getElementById('customerName').value,
            mobile_no: document.getElementById('mobileNo').value,
            neighborhood: document.getElementById('neighborhood').value,
            gender: "women",
            service_group_id: selectedData.service,
            service_id: selectedData.massage,
            date: selectedData.date ? selectedData.date.toISOString().split('T')[0] : null,
            time: selectedData.time,
            staff_id: selectedData.staff,
        };

        const summaryCard = document.getElementById('summaryCard');
        summaryCard.classList.remove('hidden');
        summaryCard.innerHTML = `
        <div class="summary-details" style="padding: 20px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h3 style="color: #a8834b;">{{__('messagess.booking_summary') }}:</h3>
            <p><strong>{{__('messagess.name') }}:</strong> ${bookingData.n_name}</p>
            <p><strong>{{__('messagess.mobile_no') }}:</strong> ${bookingData.mobile_no}</p>
            <p><strong>{{__('messagess.neighbor') }}:</strong> ${bookingData.neighborhood}</p>
            <p><strong>{{__('messagess.service_group') }}:</strong> ${bookingData.service_group_id}</p>
            <p><strong>{{__('messagess.service') }}:</strong> ${bookingData.service_id}</p>
            <p><strong>{{__('messagess.staff') }}:</strong> ${bookingData.staff_id}</p>
            <p><strong>{{__('messagess.date') }}:</strong> ${bookingData.date}</p>
            <p><strong>{{__('messagess.time') }}:</strong> ${bookingData.time}</p>
        </div>
                <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="termsCheck">
            <label class="form-check-label" for="termsCheck">
                {{ __('messagess.agree_terms') }}
        </label>
    </div>

    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" id="flexibleStaff">
        <label class="form-check-label" for="flexibleStaff">
{{ __('messagess.flexible_staff') }}
        </label>
    </div>
`;
    }


    function validateCurrentStep() {
        switch (currentStep) {
            case 1:
                const name = document.getElementById('customerName').value;
                const mobile = document.getElementById('mobileNo').value;
                const neighborhood = document.getElementById('neighborhood').value;

                if (!name || !mobile || !neighborhood) {
                    toastr.error("{{ __('messagess.location_required') }}");
                    return false;
                }

                selectedData.location = { name, mobile, neighborhood };
                break;
            case 3:
                if (!selectedData.service) {
                    toastr.error("{{ __('messagess.service_required') }}");
                    return false;
                }
                break;
            case 4:
                if (!selectedData.massage) {
                    toastr.error("{{ __('messagess.specific_service_required') }}");
                    return false;
                }
                break;
            case 5:
                if (!selectedData.date) {
                    toastr.error("{{ __('messagess.date_required') }}");
                    return false;
                }
                break;
            case 6:
                if (!selectedData.staff ) {
                    toastr.error("{{ __('messagess.staff_required') }}");
                    return false;
                }
                showBookingSummary();
                break;
            case 7:
                if (!selectedData.time) {
                    toastr.error("{{ __('messagess.time_required') }}");
                    return false;
                }

                break;
            case 8:
                completeBooking();
                break;
        }
        return true;
    }


    function completeBooking() {
        const customer_id = {{ auth()->user()->id }};

        const bookingData = {
            customer_id,
            n_name: document.getElementById('customerName').value,
            mobile_no: document.getElementById('mobileNo').value,
            neighborhood: document.getElementById('neighborhood').value,
            gender: "women",
            service_group_id: selectedData.service,
            service_id: selectedData.massage,
            date: selectedData.date ? selectedData.date.toISOString().split('T')[0] : null,
            time: selectedData.time,
            staff_id: selectedData.staff,
            status: 'Home',
            agreed: document.getElementById('termsCheck').checked ? 1 : 0,
            auto_change_staff: document.getElementById('flexibleStaff').checked ? 1 : 0,
        };
        document.getElementById('inputCustomerId').value = bookingData.customer_id;
        document.getElementById('inputCustomerName').value = bookingData.n_name;
        document.getElementById('inputMobileNo').value = bookingData.mobile_no;
        document.getElementById('inputNeighborhood').value = bookingData.neighborhood;
        document.getElementById('inputGender').value = bookingData.gender;
        document.getElementById('inputServiceGroup').value = bookingData.service_group_id;
        document.getElementById('inputServiceId').value = bookingData.service_id;
        document.getElementById('inputDate').value = bookingData.date;
        document.getElementById('inputTime').value = bookingData.time;
        document.getElementById('inputStaffId').value = bookingData.staff_id;
        document.getElementById('inputStatus').value = bookingData.status;
        document.getElementById('inputAgreed').value = bookingData.agreed;
        document.getElementById('inputAutoChangeStaff').value = bookingData.auto_change_staff;

        document.getElementById('bookingForm').submit();
    }

    // Initialize the application
    document.addEventListener('DOMContentLoaded', initializeApp);

    
</script>

<!-- jQuery (Toastr depends on it) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- JS for Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Display messages -->
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

</body>
</html>
