<script>
import axios from 'axios';
import Navbar from './Navbar.vue';
export default {
    name:'Sponsors',
    components: {Navbar},
    data(){
        return {
            sponsors: [

            ]
        }
    },

    mounted(){
        axios.get('http://127.0.0.1:8000/api/homiy/').then(response => {
      this.sponsors = response.data;
    });
    },
  
}
</script>

<template>
    <div class="w-11/12  m-auto">
       <Navbar />
        <table class="w-full border-blue border-2 justify-evenly"> 
            <thead >
                <th scope="col">#</th>
                <th scope="col">F.I.SH</th>
                <th scope="col">TEL.RAQAMI</th>
                <th scope="col">HOMIYLIK.SUMMASI</th>
                <th scope="col">SARFLANGAN.SUMMASI</th>
                <th scope="col">SANA</th>
                <th scope="col">HOLAT</th>
                <th scope="col">Amallar</th>
            </thead>
            <tbody v-for="sponsor in sponsors" :key="sponsor.id">
                <tr class="">
                    <th scope="row">{{ sponsor.id }}</th>
                    <th scope="row">{{ sponsor.UserName }}</th>
                    <th scope="row">{{ sponsor.TelNumber }}</th>
                    <th scope="row">{{ sponsor.HomiylikSummasi }}</th>
                    <th scope="row">{{ 0 }}</th>
                    <th scope="row">{{ sponsor.created_at }}</th>
                    <th scope="row">Yangi</th>
                    <th scope="row"><i class='bx bx-history text-2xl text-blue'></i></th>
                </tr>
            </tbody>
        </table>

    </div>

</template>

<style scoped>



</style>