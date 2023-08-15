<script>
export default {
    name: 'Navbar',
}
</script>

<template>
    <div>
        <div class="container mt-3  flex justify-between">
        <nav class=" ">
            <ul class="flex items-center gap-3">
              <a href="#">  <svg width="110" height="45" viewBox="0 0 89 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M59.4254 0L62.6198 1.31883L88.3516 30.5089C89.2016 31.476 88.5275 33 87.238 33H30.3818L59.4254 0Z" fill="#2044A0"/>
<path d="M28.7114 32.9707H39.7603L62.7372 6.88721C65.1111 4.22025 63.2061 0 59.6306 0C58.429 0 57.3153 0.498224 56.524 1.40675L28.7114 32.9707Z" fill="#C7DAFF"/>
<path d="M29.8248 0L33.0193 1.31883L60.9198 32.9707H0.78125L29.8248 0Z" fill="#3366FF"/>
<path d="M0.752397 32.9707H10.16L33.1369 6.88721C35.4815 4.22025 33.5766 0 30.0011 0C28.7995 0 27.6858 0.498224 26.8945 1.40675L0.19556 31.7398C-0.244049 32.2087 0.107637 32.9707 0.752397 32.9707Z" fill="#C7DAFF"/>
                </svg></a>
               <ul class="">
                <h1 class="text-xl"> METSENAT </h1>
                <p class="text-green -translate-y-1">PRO</p>
               </ul>
            </ul>
        </nav>
        <ul class=" px-4 flex text-center gap-5 items-center  rounded-md">
            <div class="h-8 items-center px-3 rounded bg-slate-200 flex gap-5">
                <h2 class="">Shohrux</h2>
                <button class="bg-transparent text-green"><i class='bx bxs-user-account text-green text-3xl '></i></button>
            </div>
            <button class="bd-transparent"><i class='bx text-2xl bx-log-in hover:text-rose-500'></i></button>
        </ul>
    </div>
    <div class=" w-full mt-10 bg-slate-100 py-4 flex justify-evenly ">
        <div>
            <button class="border w-60 h-10 text-blue border-black rounded-r-none border-opacity-5 rounded border-solid hover:border-blue  focus:bg-blue focus:text-white">DASHBOARD</button>
            <button class="border w-60 h-10 text-blue border-black rounded-none border-opacity-5  border-solid hover:border-blue focus:bg-blue focus:text-white">HOMIYLAR</button>
            <button class="border w-60 h-10 text-blue border-black rounded-l-none border-opacity-5 rounded border-solid hover:border-blue focus:bg-blue focus:text-white">TALABALAR</button>
        </div>
        <div class="flex items-center gap-4">
            <input type="search" name="search" id="search" placeholder="izlash" class="w-80 bg-slate p-1.5 rounded">
            <button class="bg-green text-white hover:text-green hover:bg-slate-50 flex items-center gap-3 rounded"><i class='bx bx-filter-alt text-2xl' ></i><span>Filter</span></button>
        </div>
    </div>
    </div>
</template>

<style scoped>

.container{
    width: 95%;
    margin: 0 auto;
}

</style>