<head>
    <script src="inc\main.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    </style>
    <script>
        tailwind.config = {
        theme: {
            extend: {
                {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    },
                },
            }
        }
        }
    </script>
</head>