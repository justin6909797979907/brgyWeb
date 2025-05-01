<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

        <livewire:components.nav-bar />
        
        <div>
            <fieldset>
                <h1 class="text-[40px] mt-4 text-center font-bold" style="font-family: 'Times New Roman', serif;">KASAYSAYAN NG BARANGAY PATUBIG</h1>
                <p class="text-justify mx-auto w-[600px] text-[20px] mt-10 indent-8">
                Sapang-alat ito ang unang katawagan sa lugar na ngayon ay kilala natin bilang Barangay Patubig. Ito ay sa dahilang sa pook na ito ay nagtatagpo ang tubig-tabang mula sa kabundukan ng Sierra Madre at ang tubig alat na nagmumula naman sa Look ng Maynila.
                </p>
                <p class="text-justify mx-auto w-[600px] text-[20px] mt-10 indent-8">
                Minsan din ay binansagan itong <strong>Daungang-Pare</strong> sapagkat sa panahon ng 
	Pananakop ng mga kastila sa ating bansa, tuwing tag-init ay madalas na pumunta rito ang
	mga prayle na nakatalaga sa Hacienda ng Lolomboy upang maligo at mamasyal.
                </p>
                <p class="text-justify mx-auto w-[600px] text-[20px] mt-10 indent-8">
                At noong <strong>1930</strong>, ang naturing pook ay ginawaran ng pangalang “Patubig”
	sapagkat nasasakop nito noon ang isang patubigang dumadaloy naman sa isang munting
	ilog patungo sa Hacienda ng Lolomboy. Ang patubigang ito ay ang siya noong ganap na
                </p>
            </fieldset>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
