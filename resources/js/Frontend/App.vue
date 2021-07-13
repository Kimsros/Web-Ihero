<template>
  <div>
    <Navbar/>
    <SubHeader/>
    <HowItWork/>
    <router-view></router-view> 
    <Footer/>
  </div>
</template>

<script>
import Navbar from "./Include/Navbar.vue";
import SubHeader from "./Include/SubHeader.vue";
import HowItWork from "./Include/HowWork.vue";
import Footer from "./Include/Footer.vue";
export default {
  name: "App",
  components:{
    Navbar,
    SubHeader,
    HowItWork,
    Footer
  }
  
};
</script>
