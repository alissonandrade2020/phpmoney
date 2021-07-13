<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PicPay - Desafio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
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
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <a href="https://picpay.com/site?gclid=Cj0KCQjw5uWGBhCTARIsAL70sLJtsWu5qHuDvaKUOZbj5Ys0Kp6nH2VjkacGn8KPUfbmL4wUO8_WZBkaAoE4EALw_wcB"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 984.47 317.57"><title>picpay-44</title><path d="M208.51,595.65h46V461.48h-46Zm61.92-225.47h-31v31h31ZM96.56,385.26H52.1v38.91H93.39c26.2,0,41.28,12.7,41.28,36.52S119.59,498,93.39,498H52.1V425h-46V595.65h46V536.9H95.77c53.19,0,84.16-28.58,84.16-77.8C179.93,413.05,149.76,385.26,96.56,385.26Zm204.84-46H208.51V432.1H301.4Zm-15.09,77H224.39V354.3h61.92Zm269.94-31H514.17v38.91h39.69c26.2,0,41.29,12.7,41.29,36.52S580.06,498,553.86,498H514.17V425h-46V595.65h46V536.9h42.08c53.19,0,84.15-28.58,84.15-77.8C640.4,413.05,609.44,385.26,556.25,385.26Zm386.64,49.23-39.7,100-39.7-100H815.86l63.51,161.16-24.61,61.13h48.43l87.33-222.29Zm-206.42-.8c-27.79,0-49.23,6.35-73.05,18.26l14.3,31.76c16.67-9.53,33.34-14.29,48.42-14.29,22.23,0,33.35,9.53,33.35,27v3.18H715c-39.7,0-61.13,18.26-61.13,48.43,0,29.37,20.64,50,55.57,50,22.23,0,38.11-7.93,50.81-21.43v17.46h45.26V489.27C804,455.13,779.34,433.69,736.47,433.69Zm27,108c-4.76,13.49-18.26,24.61-37.32,24.61-15.87,0-25.4-7.94-25.4-20.64s8.73-18.26,26.2-18.26h36.52ZM372.05,560.72c-22.23,0-38.1-17.47-38.1-43.67,0-25.4,15.87-42.87,38.1-42.87,15.88,0,27.79,6.35,36.53,17.47l31-22.23c-14.29-21.44-38.9-34.14-69.87-34.14-48.43-.79-81.77,32.55-81.77,81.77s33.34,81.78,81.77,81.78c33.35,0,58-13.5,71.46-35.73l-31.76-21.43C401.43,554.37,388.73,560.72,372.05,560.72Z" transform="translate(-6.06 -339.22)" fill="#21c25e"/></svg>
                        </g>
                    </svg>
                </div> 
            </div>
        </div>
    </body>
</html>