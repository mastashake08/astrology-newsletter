<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
<link rel="icon" type="image/png" href="/assets/images/favicon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amber Moon</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        #moonIcon {
          transform: translate(50%, 50%);
          animation: slide 10s cubic-bezier(0.280, 0.840, 0.420, 1) infinite; */
        }
        #textIcon {
          margin-top: auto;
          height:50%;
          /* animation: animateText 10s ease infinite; */
        }
        .iconAbove  {
          animation: glow 10s ease infinite;
          border-radius: 10px;
        }

        @keyframes slide {
          0% {
            transform: translateX(0) scale(1.3);
          }
          20% {
            transform: translateX(10);
          }
          50% {
            transform: translateX(75%) scale(0.5);

          }

          100% {
            transform: translateX(0) scale(1.3);
          }

        }
        @-webkit-keyframes glow {
          0% {
            box-shadow: 0 0 15px -15px #FFBE00;

          }
          50% {
            box-shadow: 0 0 15px 10px #FFBE00;

          }
          75% {
            box-shadow: 0 0 15px -10px #FFBE00;

          }
        }


            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                  <svg data-v-423bf9ae="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.09579915048755 185" class="iconAbove">
                    <!----><!----><!---->
                    <g data-v-423bf9ae="" id="textIcon" fill="#ffffff" transform="matrix(4.491017758899723,0,0,4.491017758899723,-0.3143693866770434,111.04225649120363)"><path d="M9.34 15.62L9.34 15.62L9.34 15.62Q9.11 16.13 8.44 16.13L8.44 16.13L8.44 16.13Q7.77 16.13 7.37 15.78L7.37 15.78L7.37 15.78Q6.97 15.43 6.73 14.62L6.73 14.62L6.73 14.62Q6.48 13.80 6.31 12.46L6.31 12.46L2.21 12.46L2.21 12.46Q1.50 14.07 1.50 14.95L1.50 14.95L1.50 14.95Q1.50 15.36 1.67 15.62L1.67 15.62L1.67 15.62Q1.33 16.13 0.70 16.13L0.70 16.13L0.70 16.13Q0.07 16.13 0.07 15.43L0.07 15.43L0.07 15.43Q0.07 15.04 0.32 14.27L0.32 14.27L0.32 14.27Q0.56 13.51 2.11 10.28L2.11 10.28L2.11 10.28Q3.67 7.06 4.05 5.90L4.05 5.90L4.05 5.90Q4.44 4.75 4.44 4.41L4.44 4.41L4.44 4.41Q4.44 4.07 4.40 3.91L4.40 3.91L4.40 3.91Q4.86 3.58 5.40 3.58L5.40 3.58L5.40 3.58Q5.95 3.58 6.28 3.86L6.28 3.86L6.28 3.86Q6.61 4.13 6.85 4.91L6.85 4.91L6.85 4.91Q7.10 5.70 7.41 9.07L7.41 9.07L7.41 9.07Q7.73 12.45 8.13 13.85L8.13 13.85L8.13 13.85Q8.43 14.88 9.34 15.62ZM5.40 5.71L5.40 5.71L5.40 5.71Q5.08 6.47 4.07 8.51L4.07 8.51L4.07 8.51Q3.07 10.56 2.63 11.51L2.63 11.51L6.22 11.51L6.22 11.51Q6.15 10.63 5.99 9.21L5.99 9.21L5.99 9.21Q5.82 7.78 5.77 7.41L5.77 7.41L5.77 7.41Q5.60 6.41 5.40 5.71ZM16.86 15.93L16.86 15.93L16.86 15.93Q16.37 16.13 15.92 16.13L15.92 16.13L15.92 16.13Q15.47 16.13 15.28 15.77L15.28 15.77L15.28 15.77Q15.09 15.41 15.09 14.74L15.09 14.74L15.09 14.74Q15.09 14.07 15.35 12.14L15.35 12.14L15.35 12.14Q15.61 10.21 15.61 9.35L15.61 9.35L15.61 9.35Q15.61 8.48 15.46 8.24L15.46 8.24L15.46 8.24Q15.32 7.99 14.92 7.99L14.92 7.99L14.92 7.99Q14.41 7.99 13.68 9.28L13.68 9.28L13.68 9.28Q12.95 10.56 12.44 12.17L12.44 12.17L12.44 12.17Q11.93 13.78 11.93 14.68L11.93 14.68L11.93 14.68Q11.93 15.58 12.17 15.93L12.17 15.93L12.17 15.93Q11.68 16.13 11.23 16.13L11.23 16.13L11.23 16.13Q10.78 16.13 10.59 15.77L10.59 15.77L10.59 15.77Q10.40 15.41 10.40 14.75L10.40 14.75L10.40 14.75Q10.40 14.08 10.67 12.05L10.67 12.05L10.67 12.05Q10.93 10.01 10.93 8.76L10.93 8.76L10.93 8.76Q10.93 7.50 10.64 6.93L10.64 6.93L10.64 6.93Q10.78 6.79 11.06 6.70L11.06 6.70L11.06 6.70Q11.34 6.61 11.56 6.61L11.56 6.61L11.56 6.61Q12.05 6.61 12.29 6.94L12.29 6.94L12.29 6.94Q12.53 7.28 12.53 8.21L12.53 8.21L12.53 8.21Q12.53 9.14 12.12 11.41L12.12 11.41L12.12 11.41Q13.52 7.85 14.53 6.93L14.53 6.93L14.53 6.93Q14.99 6.51 15.46 6.51L15.46 6.51L15.46 6.51Q17.00 6.51 17.00 8.93L17.00 8.93L17.00 8.93Q17.00 10.12 16.81 11.41L16.81 11.41L16.81 11.41Q18.59 6.51 20.14 6.51L20.14 6.51L20.14 6.51Q21.69 6.51 21.69 8.93L21.69 8.93L21.69 8.93Q21.69 9.63 21.52 10.95L21.52 10.95L21.52 10.95Q21.36 12.26 21.36 12.95L21.36 12.95L21.36 12.95Q21.36 14.92 21.98 15.62L21.98 15.62L21.98 15.62Q21.52 16.13 21.01 16.13L21.01 16.13L21.01 16.13Q19.85 16.13 19.85 13.41L19.85 13.41L19.85 13.41Q19.85 12.40 20.08 10.87L20.08 10.87L20.08 10.87Q20.30 9.34 20.30 8.91L20.30 8.91L20.30 8.91Q20.30 8.48 20.15 8.24L20.15 8.24L20.15 8.24Q20.01 7.99 19.60 7.99L19.60 7.99L19.60 7.99Q19.08 7.99 18.35 9.28L18.35 9.28L18.35 9.28Q17.63 10.56 17.12 12.17L17.12 12.17L17.12 12.17Q16.62 13.78 16.62 14.68L16.62 14.68L16.62 14.68Q16.62 15.58 16.86 15.93ZM27.65 15.27L27.65 15.27L27.65 15.27Q28.78 15.27 29.44 14.04L29.44 14.04L29.44 14.04Q30.09 12.80 30.09 10.89L30.09 10.89L30.09 10.89Q30.09 9.62 29.79 8.78L29.79 8.78L29.79 8.78Q29.48 7.94 28.94 7.94L28.94 7.94L28.94 7.94Q28.39 7.94 27.69 9.03L27.69 9.03L27.69 9.03Q26.98 10.12 26.43 11.70L26.43 11.70L26.43 11.70Q25.89 13.27 25.82 14.55L25.82 14.55L25.82 14.55Q26.81 15.27 27.65 15.27ZM24.22 15.78L24.22 15.78Q24.51 13.93 24.91 10.24L24.91 10.24L24.91 10.24Q25.31 6.55 25.31 5.53L25.31 5.53L25.31 5.53Q25.31 4.51 25.26 4.04L25.26 4.04L25.26 4.04Q25.20 3.57 25.02 3.22L25.02 3.22L25.02 3.22Q25.37 2.91 25.91 2.91L25.91 2.91L25.91 2.91Q26.46 2.91 26.69 3.25L26.69 3.25L26.69 3.25Q26.92 3.58 26.92 4.37L26.92 4.37L26.92 4.37Q26.92 5.15 26.00 11.19L26.00 11.19L26.00 11.19Q26.63 9.14 27.57 7.80L27.57 7.80L27.57 7.80Q28.50 6.45 29.29 6.45L29.29 6.45L29.29 6.45Q30.24 6.45 30.89 7.46L30.89 7.46L30.89 7.46Q31.54 8.46 31.54 10.46L31.54 10.46L31.54 10.46Q31.54 12.63 30.65 14.35L30.65 14.35L30.65 14.35Q30.20 15.19 29.45 15.71L29.45 15.71L29.45 15.71Q28.70 16.23 27.76 16.23L27.76 16.23L27.76 16.23Q26.56 16.23 25.72 15.29L25.72 15.29L25.72 15.29Q25.63 15.75 25.47 15.95L25.47 15.95L25.47 15.95Q25.30 16.14 24.94 16.14L24.94 16.14L24.94 16.14Q24.58 16.14 24.22 15.78L24.22 15.78ZM35.71 12.10L35.71 12.10L35.71 12.10Q35.34 12.10 34.96 12.05L34.96 12.05L34.96 12.05Q34.97 13.61 35.54 14.42L35.54 14.42L35.54 14.42Q36.11 15.23 37.13 15.23L37.13 15.23L37.13 15.23Q38.57 15.23 39.23 13.82L39.23 13.82L39.23 13.82Q39.56 14.14 39.56 14.60L39.56 14.60L39.56 14.60Q39.56 15.39 38.69 15.83L38.69 15.83L38.69 15.83Q37.81 16.27 36.86 16.27L36.86 16.27L36.86 16.27Q35.17 16.27 34.31 15.19L34.31 15.19L34.31 15.19Q33.45 14.11 33.45 12.40L33.45 12.40L33.45 12.40Q33.45 11.38 33.77 10.34L33.77 10.34L33.77 10.34Q34.09 9.30 34.65 8.42L34.65 8.42L34.65 8.42Q35.21 7.55 36.09 7.00L36.09 7.00L36.09 7.00Q36.97 6.45 38.02 6.45L38.02 6.45L38.02 6.45Q39.07 6.45 39.63 6.99L39.63 6.99L39.63 6.99Q40.18 7.52 40.18 8.36L40.18 8.36L40.18 8.36Q40.18 9.72 38.93 10.91L38.93 10.91L38.93 10.91Q37.67 12.10 35.71 12.10ZM38.71 8.82L38.71 8.82Q38.71 8.25 38.35 7.88L38.35 7.88L38.35 7.88Q38.00 7.50 37.37 7.50L37.37 7.50L37.37 7.50Q36.75 7.50 36.30 7.85L36.30 7.85L36.30 7.85Q35.84 8.20 35.57 8.79L35.57 8.79L35.57 8.79Q35.10 9.88 34.99 11.16L34.99 11.16L34.99 11.16Q35.32 11.20 35.62 11.20L35.62 11.20L35.62 11.20Q37.04 11.20 37.88 10.46L37.88 10.46L37.88 10.46Q38.71 9.73 38.71 8.82L38.71 8.82ZM43.12 16.13L43.12 16.13L43.12 16.13Q42.03 16.13 42.03 14.28L42.03 14.28L42.03 14.28Q42.03 13.51 42.32 11.68L42.32 11.68L42.32 11.68Q42.62 9.84 42.62 8.67L42.62 8.67L42.62 8.67Q42.62 7.49 42.32 6.93L42.32 6.93L42.32 6.93Q42.67 6.61 43.18 6.61L43.18 6.61L43.18 6.61Q44.20 6.61 44.20 7.67L44.20 7.67L44.20 7.67Q44.20 8.05 44.02 9.23L44.02 9.23L44.02 9.23Q43.85 10.40 43.79 10.84L43.79 10.84L43.79 10.84Q44.55 8.85 45.49 7.65L45.49 7.65L45.49 7.65Q46.44 6.45 47.05 6.45L47.05 6.45L47.05 6.45Q47.40 6.45 47.58 6.79L47.58 6.79L47.58 6.79Q47.75 7.13 47.75 7.48L47.75 7.48L47.75 7.48Q47.75 7.83 47.67 8.19L47.67 8.19L47.67 8.19Q47.46 8.15 47.28 8.15L47.28 8.15L47.28 8.15Q46.38 8.15 45.48 9.20L45.48 9.20L45.48 9.20Q44.58 10.25 44.06 11.51L44.06 11.51L44.06 11.51Q43.55 12.77 43.55 13.59L43.55 13.59L43.55 13.59Q43.55 15.05 44.09 15.62L44.09 15.62L44.09 15.62Q43.65 16.13 43.12 16.13ZM63.80 5.04L63.80 5.04L63.80 5.04Q63.80 5.81 63.26 9.05L63.26 9.05L63.26 9.05Q62.72 12.29 62.72 13.66L62.72 13.66L62.72 13.66Q62.72 15.02 63.25 15.62L63.25 15.62L63.25 15.62Q62.82 16.13 62.29 16.13L62.29 16.13L62.29 16.13Q61.19 16.13 61.19 14.28L61.19 14.28L61.19 14.28Q61.19 13.52 61.70 10.27L61.70 10.27L61.70 10.27Q62.20 7.01 62.20 5.67L62.20 5.67L62.20 5.67Q60.14 9.80 59.79 10.89L59.79 10.89L59.79 10.89Q59.44 11.97 59.44 12.47L59.44 12.47L59.44 12.47Q59.44 12.59 59.47 12.81L59.47 12.81L59.47 12.81Q59.37 12.94 59.09 13.03L59.09 13.03L59.09 13.03Q58.80 13.13 58.51 13.13L58.51 13.13L58.51 13.13Q57.89 13.13 57.56 12.73L57.56 12.73L57.56 12.73Q57.23 12.33 56.97 11.25L56.97 11.25L56.97 11.25Q56.70 10.16 56.35 8.62L56.35 8.62L56.35 8.62Q56.00 7.08 55.71 6.01L55.71 6.01L55.71 6.01Q55.68 6.27 55.18 9.33L55.18 9.33L55.18 9.33Q54.68 12.39 54.68 13.71L54.68 13.71L54.68 13.71Q54.68 15.02 55.23 15.62L55.23 15.62L55.23 15.62Q55.03 16.13 54.46 16.13L54.46 16.13L54.46 16.13Q53.44 16.13 53.44 14.28L53.44 14.28L53.44 14.28Q53.44 13.51 53.93 10.28L53.93 10.28L53.93 10.28Q54.43 7.06 54.43 5.78L54.43 5.78L54.43 5.78Q54.43 4.49 54.14 3.91L54.14 3.91L54.14 3.91Q54.46 3.58 55.12 3.59L55.12 3.59L55.12 3.59Q55.78 3.60 56.24 3.97L56.24 3.97L56.24 3.97Q56.71 4.34 56.97 5.19L56.97 5.19L56.97 5.19Q57.23 6.03 57.66 8.05L57.66 8.05L57.66 8.05Q58.09 10.07 58.51 11.41L58.51 11.41L58.51 11.41Q58.81 10.57 59.63 8.87L59.63 8.87L59.63 8.87Q60.44 7.17 61.00 5.86L61.00 5.86L61.00 5.86Q61.56 4.55 61.56 3.98L61.56 3.98L61.56 3.98Q62.01 3.58 62.85 3.58L62.85 3.58L62.85 3.58Q63.32 3.58 63.56 3.93L63.56 3.93L63.56 3.93Q63.80 4.27 63.80 5.04ZM69.24 7.50L69.24 7.50L69.24 7.50Q68.59 7.50 68.10 8.00L68.10 8.00L68.10 8.00Q67.62 8.50 67.38 9.25L67.38 9.25L67.38 9.25Q66.93 10.65 66.93 12.09L66.93 12.09L66.93 12.09Q66.93 13.52 67.52 14.38L67.52 14.38L67.52 14.38Q68.11 15.23 69.16 15.23L69.16 15.23L69.16 15.23Q69.83 15.23 70.32 14.74L70.32 14.74L70.32 14.74Q70.81 14.24 71.05 13.48L71.05 13.48L71.05 13.48Q71.50 12.04 71.50 10.62L71.50 10.62L71.50 10.62Q71.50 9.20 70.90 8.35L70.90 8.35L70.90 8.35Q70.31 7.50 69.24 7.50ZM68.47 16.27L68.47 16.27L68.47 16.27Q67.02 16.27 66.22 15.18L66.22 15.18L66.22 15.18Q65.42 14.08 65.42 12.40L65.42 12.40L65.42 12.40Q65.42 11.38 65.74 10.34L65.74 10.34L65.74 10.34Q66.07 9.30 66.63 8.42L66.63 8.42L66.63 8.42Q67.19 7.55 68.07 7.00L68.07 7.00L68.07 7.00Q68.95 6.45 69.97 6.45L69.97 6.45L69.97 6.45Q71.43 6.45 72.22 7.55L72.22 7.55L72.22 7.55Q73.01 8.64 73.01 10.32L73.01 10.32L73.01 10.32Q73.01 12.04 72.23 13.58L72.23 13.58L72.23 13.58Q71.37 15.25 70.03 15.92L70.03 15.92L70.03 15.92Q69.30 16.27 68.47 16.27ZM78.74 7.50L78.74 7.50L78.74 7.50Q78.08 7.50 77.59 8.00L77.59 8.00L77.59 8.00Q77.11 8.50 76.87 9.25L76.87 9.25L76.87 9.25Q76.43 10.65 76.43 12.09L76.43 12.09L76.43 12.09Q76.43 13.52 77.01 14.38L77.01 14.38L77.01 14.38Q77.60 15.23 78.65 15.23L78.65 15.23L78.65 15.23Q79.32 15.23 79.81 14.74L79.81 14.74L79.81 14.74Q80.30 14.24 80.54 13.48L80.54 13.48L80.54 13.48Q80.99 12.04 80.99 10.62L80.99 10.62L80.99 10.62Q80.99 9.20 80.40 8.35L80.40 8.35L80.40 8.35Q79.80 7.50 78.74 7.50ZM77.97 16.27L77.97 16.27L77.97 16.27Q76.51 16.27 75.71 15.18L75.71 15.18L75.71 15.18Q74.91 14.08 74.91 12.40L74.91 12.40L74.91 12.40Q74.91 11.38 75.24 10.34L75.24 10.34L75.24 10.34Q75.56 9.30 76.12 8.42L76.12 8.42L76.12 8.42Q76.68 7.55 77.56 7.00L77.56 7.00L77.56 7.00Q78.44 6.45 79.46 6.45L79.46 6.45L79.46 6.45Q80.92 6.45 81.71 7.55L81.71 7.55L81.71 7.55Q82.50 8.64 82.50 10.32L82.50 10.32L82.50 10.32Q82.50 12.04 81.72 13.58L81.72 13.58L81.72 13.58Q80.86 15.25 79.52 15.92L79.52 15.92L79.52 15.92Q78.79 16.27 77.97 16.27ZM89.89 6.51L89.89 6.51L89.89 6.51Q91.53 6.51 91.53 8.93L91.53 8.93L91.53 8.93Q91.53 9.63 91.37 10.95L91.37 10.95L91.37 10.95Q91.21 12.26 91.21 12.95L91.21 12.95L91.21 12.95Q91.21 14.92 91.83 15.62L91.83 15.62L91.83 15.62Q91.34 16.13 90.85 16.13L90.85 16.13L90.85 16.13Q89.68 16.13 89.68 13.41L89.68 13.41L89.68 13.41Q89.68 12.40 89.92 10.87L89.92 10.87L89.92 10.87Q90.15 9.34 90.15 8.91L90.15 8.91L90.15 8.91Q90.15 8.48 89.98 8.24L89.98 8.24L89.98 8.24Q89.81 7.99 89.39 7.99L89.39 7.99L89.39 7.99Q88.83 7.99 88.05 9.28L88.05 9.28L88.05 9.28Q87.26 10.56 86.72 12.16L86.72 12.16L86.72 12.16Q86.18 13.76 86.18 14.67L86.18 14.67L86.18 14.67Q86.18 15.58 86.42 15.93L86.42 15.93L86.42 15.93Q85.93 16.13 85.48 16.13L85.48 16.13L85.48 16.13Q85.04 16.13 84.85 15.77L84.85 15.77L84.85 15.77Q84.66 15.41 84.66 14.75L84.66 14.75L84.66 14.75Q84.66 14.08 84.92 12.05L84.92 12.05L84.92 12.05Q85.19 10.01 85.19 8.76L85.19 8.76L85.19 8.76Q85.19 7.50 84.90 6.93L84.90 6.93L84.90 6.93Q85.04 6.79 85.32 6.70L85.32 6.70L85.32 6.70Q85.60 6.61 85.82 6.61L85.82 6.61L85.82 6.61Q86.31 6.61 86.55 6.94L86.55 6.94L86.55 6.94Q86.79 7.28 86.79 8.21L86.79 8.21L86.79 8.21Q86.79 9.14 86.38 11.41L86.38 11.41L86.38 11.41Q87.88 7.83 88.93 6.93L88.93 6.93L88.93 6.93Q89.42 6.51 89.89 6.51Z"></path></g><!----><g data-v-423bf9ae="" id="moonIcon" transform="matrix(1.1111111111111112,0,0,1.1111111111111112,151.44444444444446,0.44444444444444287)" stroke="none" fill="#FFBF00"><path d="M65.147 74.943c-22.141 0-40.09-17.949-40.09-40.09 0-14.936 8.172-27.955 20.285-34.853C19.903 2.403 0 23.82 0 49.887 0 77.563 22.437 100 50.113 100 76.181 100 97.596 80.097 100 54.658c-6.898 12.113-19.917 20.285-34.853 20.285z"></path></g>
                  </svg>

                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Download The Amber Moon App</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Daily Horoscopes</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('pricing')}}" class="underline text-gray-900 dark:text-white">{{env('APP_NAME')}}+</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                  Get personalized horoscopes delivered to your email and SMS inboxes for $10 per year! Start your day right with your Amber moon horoscope!
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://jyroneparker.com/shop" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/mastashake08" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
