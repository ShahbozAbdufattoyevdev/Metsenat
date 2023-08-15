<script>
export default {
    name: 'Access',
}
</script>

<template>
    
   <div class="bg-white">
    
        <div class=" w-6/12 bg-slate-200 m-auto pb-12">
            <nav class="flex justify-center items-center gap-3 mb-10 pt-10">
        <svg width="89" height="33" viewBox="0 0 89 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M59.4254 0L62.6198 1.31883L88.3516 30.5089C89.2016 31.476 88.5275 33 87.238 33H30.3818L59.4254 0Z" fill="#2044A0"/>
<path d="M28.7114 32.9707H39.7603L62.7372 6.88721C65.1111 4.22025 63.2061 0 59.6306 0C58.429 0 57.3153 0.498224 56.524 1.40675L28.7114 32.9707Z" fill="#C7DAFF"/>
<path d="M29.8248 0L33.0193 1.31883L60.9198 32.9707H0.78125L29.8248 0Z" fill="#3366FF"/>
<path d="M0.752397 32.9707H10.16L33.1369 6.88721C35.4815 4.22025 33.5766 0 30.0011 0C28.7995 0 27.6858 0.498224 26.8945 1.40675L0.19556 31.7398C-0.244049 32.2087 0.107637 32.9707 0.752397 32.9707Z" fill="#C7DAFF"/>
        </svg><h1 class="text-4xl">METSENAT</h1>
        <span class="bg-red-600 text-white text-xs pb-1 pt-1 pl-3 rounded pr-3">Club</span>
    </nav>

            <h1 class="text-center text-3xl mt-5 mb-5">Kirish</h1>
            <form action="GET" class="w-10/12 m-auto">
                <label for="userName" class="mb-5">F.I.Sh. (Familiya Ism Sharifingiz)</label><br>
                <input type="text" name="userName" id="userName" placeholder="name" class="mt-2 mb-5 w-full bg-white p-3 borderborder-l-sky-600 ">

                <label for="password" class="mb-5">F.I.Sh. (Familiya Ism Sharifingiz)</label><br>
                <input type="password" name="password" id="password" placeholder="Your pass code" class="mt-2 mb-5 w-full bg-white p-3 borderborder-l-sky-600 ">
                <div class="robot p-30 bg-black">
                
                </div>
                <button type="submit" class="rounded border-blue border bg-blue text-white w-full h-10 mt-5 mb-10 hover:bg-white  hover:text-cyan-500 " >Kirish</button>
            </form>
           
        </div>

   </div>

</template>
<style>

</style>