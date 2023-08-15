<script>
// import { defineComponent } from 'vue';
import axios from 'axios';

export default {
name:'YuridikShaxs',
data(){
return{
    sponsors:[],
    uname: "",
    tell: "",
    summa:"",
    errors:[],
    sponsorSumm:0
}

},
mounted() {
this.getSponsors();
},

methods: {
    // getValue() {
    //     let summa = event.target.value
    //     console.log(summa)
    // },

    // getSponsors() {
    //     axios.get('http://127.0.0.1:8000/api/homiy/').then((response) => {
    //     this.sponsors = response.data;
    //     });
    // },

  createYuridik() {

    axios.post("http://127.0.0.1:8000/api/homiy", {
      UserName: this.UserName,
      TelNumber: this.TelNumber,
      HomiylikSummasi: this.HomiylikSummasi
    })  .then(response => {
      console.log("well done")
    }).catch(error => {
      console.log('error')
    })
  },
}
}
</script>

<template>
<div class="w-3/5 h-40 m-auto mt-10 pt-10">
    <nav class="flex items-center gap-3 mb-10">
        <svg width="89" height="33" viewBox="0 0 89 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M59.4254 0L62.6198 1.31883L88.3516 30.5089C89.2016 31.476 88.5275 33 87.238 33H30.3818L59.4254 0Z" fill="#2044A0"/>
<path d="M28.7114 32.9707H39.7603L62.7372 6.88721C65.1111 4.22025 63.2061 0 59.6306 0C58.429 0 57.3153 0.498224 56.524 1.40675L28.7114 32.9707Z" fill="#C7DAFF"/>
<path d="M29.8248 0L33.0193 1.31883L60.9198 32.9707H0.78125L29.8248 0Z" fill="#3366FF"/>
<path d="M0.752397 32.9707H10.16L33.1369 6.88721C35.4815 4.22025 33.5766 0 30.0011 0C28.7995 0 27.6858 0.498224 26.8945 1.40675L0.19556 31.7398C-0.244049 32.2087 0.107637 32.9707 0.752397 32.9707Z" fill="#C7DAFF"/>
</svg><h1 class="text-4xl">METSENAT</h1>
        <span class="bg-red-600 text-white text-xs pb-1 pt-1 pl-3 rounded pr-3">Club</span>
    </nav>
<h1 class="text-5xl  text-left">
    Homiy sifatida ariza <br>topshirish
</h1>

<ul class="flex w-full mt-5">
    <button class="w-3/6 p-3 border text-blue border-black rounded-r-none border-opacity-5 rounded border-solid  hover:bg-blue hover:text-white">Jismoniy shaxs</button>
    <button class="w-3/6 p-3 border text-blue border-black rounded-l-none border-opacity-5 rounded border-solid  hover:bg-blue hover:text-white">Yuridik shaxs</button>
</ul>

<form @submit.prevent="createYuridik" class="mt-5">
<label for="fName" class="mb-5">F.I.Sh. (Familiya Ism Sharifingiz)</label><br>
<input
    type="text" 
    name="uname" 
    id="uname" 
    placeholder="Enter Full Name" 
    class="mt-2 mb-5 w-full bg-white p-3 borderborder-l-sky-600 "
    v-model="UserName"
    >

<label for="tel" class="mb-5">Telefon raqamingiz</label><br>
<input
    type="tel" 
    name="tel" 
    id="tel" 
    placeholder=" +998 00 000-00-00" 
    class="mt-2 w-full bg-white rounded p-3 borderborder-l-sky-600 "
    v-model="TelNumber"
    >
    <label for="summa">Summa</label><br>
    <input type="number" placeholder="Summa" name="summa" v-model="HomiylikSummasi"><br>

<div class="btn_group mt-10 mb-10 flex-wrap flex justify-between gap-5">
    <button id="sum" @click="getValue" type="button" value="500 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue"> 500 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="1 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">1 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="2 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">2 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="3 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">3 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="4 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">4 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="5 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">5 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="6 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">6 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
    <button id="sum" @click="getValue" type="button" value="7 000 000"  class=" border-slate-400 border-2  rounded p-4 hover:border-blue">7 000 000 <span class="  text-blue">Uzs</span> <span class="text-blue opacity-0"><i class='bx bxs-check-circle text-xl -translate-y-8 translate-x-8' ></i></span></button>
</div> 
<label for="homiy">Tashkilot nomi</label> <br>
<input type="text" name="" id="" placeholder="Ibos academy" class="mt-2 w-full bg-white p-3 borderborder-l-sky-600">
<button type="submit" class="rounded border-blue border bg-blue text-white w-full h-10 mt-5 mb-10 hover:bg-white  hover:text-cyan-500 " >Yuborish</button>
</form>





<div>
    <h1>Test show</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td>
            <button @click="editUser(user)">Edit</button>
            <button @click="deleteUser(user)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <button @click="createUser">Create User</button>
  </div>


</div>    
</template>

<style scoped>
.btn_group button:focus .text-blue{
    opacity: 11;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  border: 1px solid black;
  padding: 10px;
}
</style>