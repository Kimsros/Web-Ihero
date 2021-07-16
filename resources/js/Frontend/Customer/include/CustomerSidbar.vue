<template>
  <div class="col-md-12">
    <ul class="nav nav-tabs user-navbar" style="">
        <li class="nav-item">
            <a :class="this.$router.currentRoute.name=='customerDashboard' ? 'nav-link active' : 'nav-link' " :href="'/customer'">Dashboard</a>
        </li>
        <li class="nav-item">
            <a :class="this.$router.currentRoute.name=='customerOrderReport' ? 'nav-link active' : 'nav-link' " :href="'/customer/order_report'" style="color:grey;">Order Report</a>
        </li>
    </ul>
</div>
</template>