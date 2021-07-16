<template>
  <div class="col-md-12">
                <ul class="nav nav-tabs user-navbar" style="">
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='deliveryDashboard' ? 'nav-link active' : 'nav-link' " :href="'/delivery'">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='deliveryReportOrder' ? 'nav-link active' : 'nav-link' " :href="'/delivery/report'">Delivery Report</a>
                    </li>
                </ul>
            </div>
</template>