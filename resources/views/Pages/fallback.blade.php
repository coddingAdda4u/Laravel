<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Not Found</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    /* Animated background elements */
    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    .blob {
      position: absolute;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
      animation: blob-animation 8s ease-in-out infinite;
    }

    .blob:nth-child(1) {
      width: 300px;
      height: 300px;
      top: -150px;
      left: -150px;
      animation-delay: 0s;
    }

    .blob:nth-child(2) {
      width: 250px;
      height: 250px;
      bottom: -100px;
      right: -100px;
      animation-delay: 2s;
    }

    .blob:nth-child(3) {
      width: 200px;
      height: 200px;
      top: 50%;
      right: -100px;
      animation-delay: 4s;
    }

    @keyframes blob-animation {
      0% {
        transform: translate(0, 0) scale(1);
      }

      33% {
        transform: translate(30px, -50px) scale(1.1);
      }

      66% {
        transform: translate(-20px, 20px) scale(0.9);
      }

      100% {
        transform: translate(0, 0) scale(1);
      }
    }

    /* Main container */
    .container {
      text-align: center;
      z-index: 1;
      animation: fade-in 0.8s ease-out;
    }

    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* 404 number */
    .error-code {
      font-size: 120px;
      font-weight: 900;
      background: linear-gradient(45deg, #fff, #e0e0e0);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin: 0;
      line-height: 1;
      animation: float 3s ease-in-out infinite;
      text-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    /* Error message */
    .error-message {
      font-size: 32px;
      color: #fff;
      margin: 20px 0;
      font-weight: 600;
      animation: slide-in-left 0.8s ease-out 0.2s backwards;
    }

    @keyframes slide-in-left {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Description */
    .error-description {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.8);
      margin: 15px 0 40px;
      max-width: 500px;
      line-height: 1.6;
      animation: slide-in-right 0.8s ease-out 0.4s backwards;
    }

    @keyframes slide-in-right {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Button styles */
    .button-group {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 40px;
      animation: slide-up 0.8s ease-out 0.6s backwards;
    }

    @keyframes slide-up {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn {
      padding: 14px 40px;
      font-size: 16px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    /* Primary button */
    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: #fff;
      box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
      background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    }

    .btn-primary:active {
      transform: translateY(-1px);
    }

    /* Secondary button */
    .btn-secondary {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: 2px solid rgba(255, 255, 255, 0.4);
      backdrop-filter: blur(10px);
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.3);
      border-color: rgba(255, 255, 255, 0.6);
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }

    .btn-secondary:active {
      transform: translateY(-1px);
    }

    /* Ripple effect */
    .btn::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    .btn:active::before {
      width: 300px;
      height: 300px;
    }

    /* Icon styles */
    .icon {
      display: inline-block;
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
      animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .icon svg {
      width: 100%;
      height: 100%;
      filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .error-code {
        font-size: 80px;
      }

      .error-message {
        font-size: 24px;
      }

      .error-description {
        font-size: 16px;
        max-width: 90%;
      }

      .button-group {
        flex-direction: column;
        gap: 15px;
      }

      .btn {
        width: 100%;
      }
    }

    /* Additional decorative elements */
    .stars {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }

    .star {
      position: absolute;
      width: 2px;
      height: 2px;
      background: white;
      border-radius: 50%;
      animation: twinkle 3s ease-in-out infinite;
    }

    @keyframes twinkle {

      0%,
      100% {
        opacity: 0.3;
      }

      50% {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="background">
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
  </div>

  <div class="container">
    <div class="icon">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <!-- Sad face icon -->
        <circle cx="50" cy="50" r="45" fill="none" stroke="white" stroke-width="2" />
        <circle cx="35" cy="40" r="4" fill="white" />
        <circle cx="65" cy="40" r="4" fill="white" />
        <path d="M 35 65 Q 50 55 65 65" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" />
      </svg>
    </div>

    <h1 class="error-code">404</h1>
    <h2 class="error-message">Oops! Page Not Found</h2>
    <p class="error-description">
      The page you're looking for seems to have wandered off into the digital wilderness.
      Don't worry, we'll help you find your way back!
    </p>

    <div class="button-group">
      <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
      <button onclick="history.back()" class="btn btn-secondary">Go Back</button>
    </div>
  </div>
</body>

</html>