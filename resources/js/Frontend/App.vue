<template>
  <div>
    <Navbar/>
    <SubHeaderHome v-if="this.$router.currentRoute.name=='home'"/>
    <SubHeaderRestuarant v-if="this.$router.currentRoute.name!='home' && this.$router.currentRoute.name!='/restuarant_detail'"/>
    <HeaderRestuarantDetail v-if="this.$router.currentRoute.name=='/restuarant_detail'"/>
    <router-view></router-view> 
    <Footer/>
  </div>
</template>

<script>
import Navbar from "./Include/Navbar.vue";
import SubHeaderHome from "./Include/SubHeader.vue";
import Footer from "./Include/Footer.vue";
import SubHeaderRestuarant from "./Include/SubHeaderRestuarant.vue";
import HeaderRestuarantDetail from "./Include/HeaderRestuarantDetail.vue";
export default {
  data(){
    return{
      data:null,
    };
  },
  name: "App",
  components:{
    Navbar,
    SubHeaderHome,
    SubHeaderRestuarant,
    HeaderRestuarantDetail,
    Footer
  },
  mounted(){
    console.log(this.$router.currentRoute.path);
  }
  
};
</script>
