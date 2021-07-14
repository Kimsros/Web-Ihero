<template>
    <div class="container">
        <div class="">
            <div class="center">
                <div class="container-fluid">
                    <form action="#" class="popup-form" id="myRegister" style="padding:5px;background:grey;border-radius:10px" @submit.prevent="login()">
                        <div class="login_icon text-center"><i class="icon_lock_alt"></i></div>
                        <input type="text" class="form-control form-white" placeholder="Email" style="border-radius:10px">
                        <input type="text" class="form-control form-white" placeholder="Password" style="border-radius:10px">
                        <label for="check_2"><strong style="color:white">I don't have account !! </strong><a :href="'/register'" style="color:blue">Register</a></label>
                        <button type="submit" class="btn btn-submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return {
            email:null,
            password:null,
            role:null
        }
    },
    methods:{
        login(){
            const data=['Admin','Customer','Vender','Staff','Delivery'];
            this.role=data[Math.floor(Math.random()*data.length)];
            this.role='Vender';
            if(this.role=='Admin'){
                window.location.href='/admin';
            }else if(this.role=='Customer'){
                
            }else if(this.role=='Vender'){
                window.location.href='/vender';
            }else if(this.role=='Staff'){
                
            }else if(this.role=='Delivery'){

            }else{
                window.location.href='/';
            }
        }
    }
}
</script>
