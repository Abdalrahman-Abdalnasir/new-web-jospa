{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ language_direction() }}" class="theme-fs-sm">
<head>
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') | {{ app_name() }}</title>
    <link rel="stylesheet" href="{{ mix('css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/backend.css') }}">
    @if (language_direction() == 'rtl')
        <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('custom-css/frontend.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    @stack('after-styles')
    <link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">
<style>
    body{
        font-family: 'Lama Sans', sans-serif !important;
        font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
    }
    *{
        font-family: 'Lama Sans', sans-serif !important;
        font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
    }
    .cart-table th, .cart-table td { text-align: center; vertical-align: middle; }
    .cart-empty { color: #888; font-size: 1.3rem; margin: 3rem 0; text-align: center; }
    .cart-actions { display: flex; gap: 1rem; justify-content: center; }
    .btn-danger { background: #dc3545; color: #fff; border: none; padding: 0.5rem 1.2rem; border-radius: 8px; }
    .btn-primary { background: var(--primary-color); color: #fff; border: none; padding: 0.5rem 1.5rem; border-radius: 8px; }
    .btn-danger:hover, .btn-primary:hover { opacity: 0.85; }
    .show-services-btn {
        position: relative;
        overflow: hidden;
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 0.6rem 2.2rem 0.6rem 1.2rem;
        font-size: 1rem;
    font-family: 'Lama Sans', sans-serif !important;
    font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
        cursor: pointer;
        transition: background 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 14px rgba(0,123,255,0.15);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .show-services-btn .btn-icon {
        display: inline-block;
        transform: translateX(0);
        transition: transform 0.3s cubic-bezier(.4,2.3,.3,1);
    }
    .show-services-btn:hover {
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        box-shadow: 0 6px 20px rgba(0,123,255,0.25);
    }
    .show-services-btn:hover .btn-icon {
        transform: translateX(-8px) scale(1.2) rotate(-10deg);
    }
    .show-services-btn .btn-text {
        font-weight: bold;
        letter-spacing: 1px;
    }
    .cart-cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
    }
    .cart-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        padding: 2rem 1.5rem 1.5rem 1.5rem;
        min-width: 320px;
        max-width: 350px;
        position: relative;
        transition: transform 0.2s, box-shadow 0.2s;
        margin-bottom: 1.5rem;
        border: 1px solid #f1f1f1;
    }
    .cart-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0,123,255,0.13);
    }
    .cart-card .customer-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--primary-color, #bc9a69);
        margin-bottom: 0.5rem;
    }
    .cart-card .mobile {
        font-size: 1.1rem;
        color: #444;
        margin-bottom: 1.2rem;
    }
    .cart-card .to {
        white-space: normal;
        padding-top: 10px;
        border-left: 2px solid gray;
        font-size: 1.1rem;
        color: #444;
        margin-bottom: 1.2rem;
    }
    .cart-card .show-services-btn {
        width: 100%;
        justify-content: center;
        font-size: 1.1rem;
        padding: 0.7rem 0;
        border-radius: 25px;
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        color: #fff;
        border: none;
    font-family: 'Lama Sans', sans-serif !important;
    font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 2px 10px rgba(0,123,255,0.10);
        transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    .cart-card .show-services-btn .btn-icon {
        transition: transform 0.3s cubic-bezier(.4,2.3,.3,1);
    }
    .cart-card .show-services-btn:hover {
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        box-shadow: 0 6px 20px rgba(0,123,255,0.18);
        transform: scale(1.04);
    }
    .cart-card .show-services-btn:hover .btn-icon {
        transform: translateX(-8px) scale(1.2) rotate(-10deg);
    }
    .modal-backdrop {
        position: fixed;
        top:0; left:0; right:0; bottom:0;
        background: rgba(0,0,0,0.25);
        z-index: 1040;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .custom-modal {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 8px 32px #bc9a69;
        padding: 2rem 2.5rem;
        width: 30%;
        position: relative;
        z-index: 1050;
        animation: modalIn 0.4s cubic-bezier(.4,2.3,.3,1);
    }
    @keyframes modalIn {
        from { transform: scale(0.8) translateY(40px); opacity: 0; }
        to { transform: scale(1) translateY(0); opacity: 1; }
    }
    .custom-modal .close-modal {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #bc9a69;
        cursor: pointer;
        transition: color 0.2s;
    }
    .custom-modal .close-modal:hover {
        color: #dc3545;
    }
    @keyframes fadeInUp { from { opacity:0; transform:translate3d(0,40px,0);} to { opacity:1; transform:none; } }
    .animate__animated.animate__fadeInUp { animation: fadeInUp 0.7s; }
    @keyframes zoomIn { from { opacity:0; transform:scale(0.7);} to { opacity:1; transform:scale(1);} }
    .animate__animated.animate__zoomIn { animation: zoomIn 0.4s;margin-top: 128px; }

    .cart-cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
    }
    .cart-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 2rem 1.5rem 1.5rem 1.5rem;
        min-width: 320px;
        max-width: 350px;
        position: relative;
        transition: transform 0.2s, box-shadow 0.2s;
        margin-bottom: 1.5rem;
        border: 1px solid #f1f1f1;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .cart-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 8px 32px #bc9a694d;
    }
    .avatar-circle {
        width: 60px;
        height: 60px;
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 10px rgba(0,123,255,0.10);
        border: 3px solid #fff;
    }
    .customer-info {
        text-align: center;
        margin-bottom: 1.2rem;
    }
    .customer-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--primary-color, #bc9a69);
        margin-bottom: 0.3rem;
    }
    .mobile {
        font-size: 1.1rem;
        color: #444;
    }
    .fancy-btn {
        width: 100%;
        justify-content: center;
        font-size: 1.1rem;
        padding: 0.7rem 0;
        border-radius: 25px;
        background: linear-gradient(90deg, #bc9a69 0%, #00c6ff 100%);
        color: #fff;
        border: none;
    font-family: 'Lama Sans', sans-serif !important;
    font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 2px 10px rgba(0,123,255,0.10);
        transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    .fancy-btn .btn-icon {
        transition: transform 0.3s cubic-bezier(.4,2.3,.3,1);
    }
    .fancy-btn:hover {
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        box-shadow: 0 6px 20px rgba(0,123,255,0.18);
        transform: scale(1.04);
    }
    .fancy-btn:hover .btn-icon {
        transform: translateX(-8px) scale(1.2) rotate(-10deg);
    }
    .modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.3); /* ظل خلفي */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1040;
    }
    .custom-modal {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.18);
    padding: 2rem 2.5rem;
    width: 30%;
    position: relative;
    z-index: 1050;
    animation: modalIn 0.4s cubic-bezier(.4,2.3,.3,1);
    margin: 0 auto;
    }
    .modal-title {
        color: var(--primary-color,#bc9a69);
        margin-bottom: 1.5rem;
        text-align: center;
        font-weight: bold;
        font-size: 1.3rem;
        letter-spacing: 1px;
    }
    .modal-details {
        line-height: 2.2;
        font-size: 1.1rem;
        color: #333;
        padding: 0.5rem 0.5rem 0 0.5rem;
    }
    .close-modal-circle {
        position: absolute;
        background: linear-gradient(135deg, #dc3545 0%, #ff7675 100%);
        top: 1rem;
        left: 1rem;
        border: none;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        color: #fff;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,123,255,0.13);
        cursor: pointer;
        transition: background 0.2s, color 0.2s, transform 0.2s;
        z-index: 10;
    }
    .close-modal-circle:hover {
        background: linear-gradient(135deg, #dc3545 0%, #ff7675 100%);
        color: #fff;
        transform: scale(1.1) rotate(-10deg);
    }
    .cart-total-box {
    border-radius: 18px;
    padding: 1.5rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2.5rem;
    margin: 0 auto;
    width: 100%;
    margin-bottom: 2rem;
    font-family: 'Lama Sans', sans-serif !important;
    font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
    }
    .cart-total-label {
        display: flex;
        align-items: center;
        font-size: 1.2rem;
        color: #bc9a69;
        font-weight: bold;
    }
    /*background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);*/
    .cart-total-value {
        color: #222;
        font-weight: bold;
        background: #bc9a6924;
        border-radius: 10px;
        padding: 0.3rem 1.2rem;
        margin: 0 0.7rem;
    }
    .pay-now-btn {
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        color: #fff;
        border: none;
        border-radius: 25px;
        padding: 0.7rem 2.2rem;
        font-size: 1.1rem;
        font-family: 'Lama Sans', sans-serif !important;
        font-style: {{ app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important' }};
        font-weight: bold;
        letter-spacing: 1px;
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    .pay-now-btn:hover {
        background: linear-gradient(90deg, #bc9a69 60%, #e2c89c 100%);
        box-shadow: 0 6px 20px rgba(0,123,255,0.18);
        transform: scale(1.04);
    }
    .status{
        color: black;
        position: absolute;
        top: 4px;
        left: -24px;18;
        rotate: -35deg;
        background: #bc9a69;
        width: 140px;
        text-align: center;
        padding: 9px;
        z-index: 9;
        font-weight: bold;
    }
        /* .h5{
        font-size:15.6px;
    } */

    .main-container {
        max-width: 1140px;
        margin: 48px auto 0 auto;
        background: #fff;
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 4px 32px #ede7f6a0;
        padding: 40px 32px 32px 32px;
        position: relative;
    }
    .cart-title {
        font-size: 1.7em;
        font-weight: bold;
        color: #222;
        margin-bottom: 32px;
    }
    .service-card {
        border: 1.5px solid #222;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 2px 8px #f3e5f5;
        padding: 28px 24px 18px 24px;
        display: flex;
        align-items: flex-start;
        gap: 50px;
        margin-bottom: 32px;
        position: relative;
    }
    .service-delete {
        background: linear-gradient(135deg, #e53935 0%, #ff7675 100%);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5em;
        box-shadow: 0 2px 8px #e5393555;
        cursor: pointer;
        margin-top: 8px;
        margin-left: 8px;
        transition: background 0.2s, transform 0.2s;
        position: relative;
        top: 0;
        left: 0;
    }
    .service-delete:hover {
        background: linear-gradient(135deg, #c62828 0%, #ff5252 100%);
        color: #fff;
        transform: scale(1.08) rotate(-8deg);
    }
    .service-details {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .service-name {
        font-size: 1.2em;
        font-weight: bold;
        color: #222;
        margin-bottom: 4px;
    }
    .service-info {
        color: #444;
        font-size: 1em;
        margin-bottom: 2px;
    }
    .service-date {
        color: #222;
        font-size: 0.98em;
        font-weight: 500;
    }
    .service-price {
        color: #c7a16b;
        font-size: 1.1em;
        font-weight: bold;
        margin-top: 8px;
    }
    .service-coupon {
        display: flex;
        align-items: center;
        gap: 0;
        margin-top: 50px;
    }
    .service-coupon input {
        border: 1.5px solid #222;
        border-radius: 8px 0 0 8px;
        padding: 10px 16px;
        font-size: 1em;
        outline: none;
        min-width: 220px;
    }
    .service-coupon button {
        border: none;
        background: #c7a16b;
        color: #fff;
        font-weight: bold;
        font-size: 1em;
        border-radius: 0 8px 8px 0;
        padding: 10px 22px;
        cursor: pointer;
        margin-right: -4px;
        transition: background 0.2s;
    }
    .service-coupon button:hover {
        background: #a67c52;
    }
    .summary-section {
        margin-top: 18px;
        display: flex;
        align-items: center;
        gap: 18px;
    }
    .summary-coupon {
        display: flex;
        align-items: center;
        gap: 0;
        margin: 0 21px 33px 0;
    }
    .summary-coupon input {
        border: 1.5px solid #222;
        border-radius: 8px 0 0 8px;
        padding: 10px 16px;
        font-size: 1em;
        outline: none;
        min-width: 220px;
    }
    .summary-coupon button {
        border: none;
        background: #c7a16b;
        color: #fff;
        font-weight: bold;
        font-size: 1em;
        border-radius: 0 8px 8px 0;
        padding: 10px 22px;
        cursor: pointer;
        margin-right: -4px;
        transition: background 0.2s;
    }
    .summary-coupon button:hover {
        background: #a67c52;
    }
    .summary-info {
        margin-top: 32px;
        margin-bottom: 18px;
    }
    .summary-label {
        font-size: 1.1em;
        color: #222;
        font-weight: bold;
    }
    .summary-value {
        font-size: 1.1em;
        color: #c7a16b;
        font-weight: bold;
    }
    .wallet-label {
        color: #222;
        font-size: 1em;
        margin-top: 8px;
    }
    .wallet-value {
        color: #c7a16b;
        font-size: 1em;
        font-weight: bold;
    }
    .pay-options {
        margin: 18px 0 32px 0;
        display: flex;
        align-items: center;
        gap: 24px;
    }
    .pay-radio {
        accent-color: #c7a16b;
        margin-left: 6px;
    }
    .pay-label {
        font-size: 1em;
        color: #222;
        margin-left: 18px;
    }
    .pay-label:last-child {
        margin-left: 0;
    }
    .pay-btn {
        width: 100%;
        background: #c7a16b;
        color: #fff;
        font-size: 1.25em;
        font-weight: bold;
        border: none;
        border-radius: 12px;
        padding: 16px 0;
        margin-top: 18px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        transition: background 0.2s;
    }
    .pay-btn:hover {
        background: #a67c52;
    }
    /* Floating Buttons */
    .floating-cart {
        position: fixed;
        right: 36px;
        bottom: 120px;
        background: #c7a16b;
        color: #fff;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 2px 8px #c7a16b55;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2em;
        z-index: 10;
    }
    .cart-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #e53935;
        color: #fff;
        font-size: 1em;
        font-weight: bold;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 1px 4px #b71c1c33;
    }
    .floating-btns {
        position: fixed;
        right: 36px;
        bottom: 36px;
        display: flex;
        flex-direction: column;
        gap: 18px;
        z-index: 10;
    }
    .floating-btn {
        background: #c7a16b;
        color: #fff;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        box-shadow: 0 2px 8px #c7a16b55;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5em;
        cursor: pointer;
        border: none;
        transition: background 0.2s;
    }
    .floating-btn:hover {
        background: #a67c52;
    }
    @media (max-width: 991.98px) {
        .main-container {
            max-width: 100%;
            margin: 16px 0 0 0;
            border-radius: 16px;
            box-shadow: 0 2px 12px #ede7f6a0;
            padding: 18px 6px 16px 6px;
        }
        .cart-title {
            font-size: 1.2em;
            margin-bottom: 18px;
        }
        .cart-cards-container {
            gap: 1rem;
        }
        .cart-card {
            min-width: 90vw;
            max-width: 98vw;
            padding: 1.2rem 0.7rem 1rem 0.7rem;
            border-radius: 12px;
        }
        .service-card {
            flex-direction: column;
            gap: 12px;
            padding: 18px 8px 12px 8px;
            margin-bottom: 18px;
        }
        .service-coupon input, .summary-coupon input {
            min-width: 120px;
            font-size: 0.95em;
            padding: 8px 8px;
        }
        .service-coupon button, .summary-coupon button {
            font-size: 0.95em;
            padding: 8px 12px;
        }
        .summary-section {
            flex-direction: column;
            gap: 10px;
        }
        .pay-btn {
            font-size: 1em;
            padding: 12px 0;
        }
    }
    @media (max-width: 600px) {
        .main-container {
            padding: 8px 2px 8px 2px;
            border-radius: 8px;
        }
        .cart-title {
            font-size: 1em;
        }
        .cart-card, .service-card {
            min-width: 98vw;
            max-width: 100vw;
            padding: 0.7rem 0.2rem 0.7rem 0.2rem;
            border-radius: 8px;
        }
        .cart-cards-container {
            gap: 0.5rem;
        }
        .summary-section {
            gap: 6px;
        }
        .pay-btn {
            font-size: 0.95em;
            padding: 10px 0;
        }
    }
    a:hover {
        color:white;
    } 
    .btn:hover {
    background-color: #956e48;
    }
    i{
            font-family: "Font Awesome 6 Free" !important;
            font-style: normal !important;
    }
    .disabled {
        opacity: 0.6;
        pointer-events: none;
    }
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 28px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0; left: 0;
    right: 0; bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 28px;
    }

    .slider::before {
    position: absolute;
    content: "";
    height: 22px;
    width: 22px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
    }

    .label-yes, .label-no {
    position: absolute;
    top: 4px;
    width: 50%;
    text-align: center;
    font-size: 14px;
    font-family: Arial, sans-serif;
    color: white;
    pointer-events: none;
    transition: 0.4s;
    }

    .label-yes {
    left: 0;
    opacity: 1;
    }

    .label-no {
    right: 0;
    opacity: 0;
    }

    input:checked + .slider {
    background-color: #c7a16b;
    }

    input:checked + .slider::before {
    transform: translateX(32px);
    }

    input:checked ~ .label-yes {
    opacity: 1;
    }

    input:checked ~ .label-no {
    opacity: 0;
    }

    input:not(:checked) + .slider {
    background-color: #ccc;
    }

    input:not(:checked) ~ .label-yes {
    opacity: 0;
    }

    input:not(:checked) ~ .label-no {
    opacity: 1;
    }
</style>
</head>
<body class="bg-white">
    <!-- Lightning Progress Bar -->
    @include('components.frontend.progress-bar')
    <!-- Hero Section (30% of screen) -->
    <div class="position-relative" style="height: 290.79px;">
        <img src="{{ asset('images/spa/Hero_2.png') }}" alt="Contact Hero" class="w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.35);"></div>
        <!-- First Navbar -->
        @include('components.frontend.navbar')
        <!-- Second Navbar -->
        @include('components.frontend.second-navbar')
    </div>

    <!-- Page Content -->
        <div class="container py-5" style="min-height: 60vh;">
            @if($cartItems->count())
                <div class="main-container">
                <div class="cart-title">{{ __('messagess.cart') }}</div>
                    @foreach($cartItems as $item)
                        @foreach($item->services as $service)
                            <div class="service-card">
                                <div class="service-details">
                                    <div class="service-name">{{ $service->service_name ?? '-' }}</div>
                                    <div class="service-info">{{ __('messagess.employee') }}: {{ $service->employee->full_name ?? '-' }}</div>
                                    <div class="service-info">{{ __('messagess.branch') }}: {{ $item->branch->name ?? '-' }}</div>
                                    <div class="service-date">{{ __('messagess.date') }}:{{ \Carbon\Carbon::parse($item->start_date_time)->format('Y-m-d') }} - {{ \Carbon\Carbon::parse($item->start_date_time)->format('H:i') }}</div>
                                    <div class="service-price">
                                        @if($service->discount_amount && $service->discount_amount > 0)
                                            <div>
                                                <span class="original-price text-muted" style="text-decoration: line-through;">
                                                    {{ $service->service_price }} SR
                                                </span>
                                                <span class="discounted-price text-success fw-bold">
                                                    {{ $service->service_price - $service->discount_amount }} SR
                                                </span>
                                            </div>
                                            <div class="discount-info text-primary small">
                                                {{ __('messagess.discount') }}: - {{ $service->discount_amount }} SR
                                            </div>
                                            @if ($service->coupon_code)
                                                <div class="coupon-code small text-secondary">
                                                    {{ __('messagess.coupon') }}: {{ $service->coupon_code }}
                                                </div>
                                            @endif
                                        @else
                                            <span class="original-price fw-bold">{{ $service->service_price }} SR</span>
                                        @endif
                                    </div>
                                </div>
                                @if ($service->coupon_code)
                                    <div class="service-coupon">
                                        <button class="disabled" disabled>{{ __('messagess.apply_coupon') }}</button>
                                        <input type="text" value="{{ $service->coupon_code }}" placeholder="{{ __('messagess.enter_coupon') }}"data-service-id="{{ $service->service_id }}"data-booking-id="{{ $item->id }}"disabled>
                                    </div>
                                @else
                                    <div class="service-coupon">
                                        <button onclick="checkCoupon(this)">{{ __('messagess.apply_coupon') }}</button>
                                        <input type="text" placeholder="{{ __('messagess.enter_coupon') }}"data-service-id="{{ $service->service_id }}"data-booking-id="{{ $item->id }}">
                                    </div>
                                @endif
                                <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button class="service-delete" title="{{ __('messagess.delete_service') }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    @endforeach
                <div class="summary-section">
                    <div class="summary-coupon">
                        <button onclick="checkInvoiceCoupon(this)">{{ __('messagess.add_invoice_coupon') }}</button>
                        <input type="text" id="invoiceCouponInput" placeholder="{{ __('messagess.enter_invoice_coupon') }}">
                    </div>
                </div>
                    <div style="display: flex;gap: 14px;align-items: center;">
                        {{ __('messages.apply_loyalty_points') }}
                        <label class="switch">
                          <input type="checkbox" id="toggleBtn">
                          <span class="slider"></span>
                          <span class="label-yes">{{ __('messages.yes') }}   </span>
                          <span class="label-no">{{ __('messages.no') }}</span>
                        </label>
                    </div>
                <form action="{{route('cart.payment')}}" method="post">
                @csrf
                <input type="hidden" name="discount_amount" id="discount_amount" value="{{ $discountTotal }}">
                <input type="hidden" name="loyalty_discount" id="loyalty_discount" value="0">
                <input type="hidden" name="final_total" id="final_total" value="{{ $finalPrice }}"> <!-- Done -->
                
                <div class="summary-info">
                    <span class="summary-label">{{ __('messagess.total') }} :</span>
                    <span class="summary-value">SR <span id="tl">{{$finalPrice}}</span></span>
                </div>
                <div class="wallet-label">
                    {{ __('messagess.wallet_balance') }} : <span class="wallet-value">SR {{$balance}}</span>
                </div>
                <div class="pay-options">
                    <label class="pay-label">
                        <input type="radio" class="pay-radio" name="pay" value="card" checked>{{ __('messagess.pay_by_card') }}
                    </label>
                
                    <label class="pay-label">
                        <input type="radio" class="pay-radio" name="pay" value="wallet">{{ __('messagess.pay_by_wallet') }}
                    </label>
                </div>
                <button class="pay-btn">{{ __('messagess.continue_to_pay') }} <i class="fas fa-credit-card"></i> </button>
            </div>
            @else
                    <div id="emptyCart" class="cart-empty">
                        <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                        <p>{{ __('messagess.cart_empty_message') }}</p>
                        <a href="{{ route('frontend.services') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-arrow-right"></i> {{ __('messagess.browse_services') }}
                        </a>
                    </div>
            @endif
        </div>
    </form>
    <!-- Footer -->
    @include('components.frontend.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>
    
    
<script>
    function checkCoupon(button) {
        const input = button.nextElementSibling;
        const couponCode = input.value.trim();
        const serviceId = input.dataset.serviceId;
        const bookingId = input.dataset.bookingId;
        
        if (!couponCode) {
            toastr.error("{{ __('messagess.enter_coupon_code') }}");
            return;
        }
        
        const url = `/validate-coupon?coupon_code=${encodeURIComponent(couponCode)}&service_id=${serviceId}&booking_id=${bookingId}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.valid) {  toastr.success("{{ __('messagess.coupon_applied') }}: " + " " + couponCode);  } else {  toastr.error("{{ __('messagess.invalid_coupon_for_service') }}");  }
            })
            .catch(() => { toastr.error("{{ __('messagess.error_occurred') }}");  });
    }

    function checkInvoiceCoupon(button) {
        const input = document.getElementById('invoiceCouponInput');
        const couponCode = input.value.trim();
        
        if (!couponCode) {
            toastr.error("{{ __('messagess.enter_coupon_code') }}");
            return;
        }
        
        const url = `/validate-invoice-coupon?coupon_code=${encodeURIComponent(couponCode)}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.valid) {
                    toastr.success("{{ __('messagess.coupon_applied') }}: " + couponCode);
                    const discountInput = document.getElementById('discount_amount');
                    let currentDiscount = parseFloat(discountInput.value) || 0;
                    let newDiscount = parseFloat(data.discount_amount) || 0;
                    
                    discountInput.value = (currentDiscount + newDiscount).toFixed(2);    
                    const totalEl = document.getElementById('tl');
                    let total = parseFloat(totalEl.innerText);
                    let discount = parseFloat(data.discount_amount);
                    let newTotal = total - discount;
                    if (newTotal < 0) newTotal = 0;
                    totalEl.innerText = newTotal.toFixed(2);
                    document.getElementById('final_total').value = newTotal.toFixed(2);
        
                    input.disabled = true;
                    button.disabled = true;
                    button.classList.add('disabled');
                    const summary = document.querySelector('.summary-section');
                    const discountInfo = document.createElement('div');
                    discountInfo.className = 'invoice-discount mt-2 text-success fw-bold';
                    discountInfo.innerText = `- ${discount} SR {{ __('messagess.discount') }}`;
                    summary.appendChild(discountInfo);
                } else {
                    toastr.error("{{ __('messagess.invalid_coupon') }}");
                }
            })
            .catch(() => { toastr.error("{{ __('messagess.error_occurred') }}"); });
    }

    let originalTotal = parseFloat(document.getElementById('tl').innerText);

    document.getElementById('toggleBtn').addEventListener('change', function() {
        const isChecked = this.checked; // T & F
        const totalEl = document.getElementById('tl'); 
        const hiddenTotalInput = document.getElementById('final_total');
        if (isChecked) {
            fetch(`{{ route('loyalty.check') }}`)
            .then(response => response.json())
            .then(data => {
                let loyaltyAmount = parseFloat(data.points);
                
                if (loyaltyAmount <= 0) {
                    toastr.error("{{ __('messages.insufficient_loyalty_balance') }}"); // الرصيد غير كافي
                    document.getElementById('toggleBtn').checked = false;
                    return;
                }
            // 🟢 خد أقل من (loyaltyAmount , originalTotal)
            let appliedLoyalty = Math.min(loyaltyAmount, originalTotal); // 500 , 1000 => 500

            document.getElementById('loyalty_discount').value = appliedLoyalty.toFixed(2);

            let newTotal = originalTotal - appliedLoyalty;
            if (newTotal < 0) newTotal = 0;

            document.getElementById('tl').innerText = newTotal.toFixed(2);
            document.getElementById('final_total').value = newTotal.toFixed(2);

            toastr.success("{{ __('messages.loyalty_points_applied') }}: -" + appliedLoyalty + " SR");
        })
        .catch(() => {
            toastr.error("{{ __('messagess.error_occurred') }}");
        });
}
 else {
            totalEl.innerText = originalTotal.toFixed(2);
            hiddenTotalInput.value = originalTotal.toFixed(2);
            document.getElementById('loyalty_discount').value = '0';
            toastr.info("{{ __('messages.loyalty_points_removed') }}");
        }
    });
</script>

</body>
</html>
