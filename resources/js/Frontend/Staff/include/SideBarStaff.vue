<template>
  <div class="col-md-12">
                <ul class="nav nav-tabs user-navbar" style="">
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='staffDashboard' ? 'nav-link active' : 'nav-link' " :href="'/staff'">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='staffProduct' ? 'nav-link active' : 'nav-link' " :href="'/staff/product'">Product</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='staffOrder' ? 'nav-link active' : 'nav-link' " :href="'/staff/order'" style="color:grey;">Order</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='staffReport' ? 'nav-link active' : 'nav-link' " :href="'/staff/report'" style="color:grey;">Report</a>
                    </li>
                </ul>
            </div>
</template>