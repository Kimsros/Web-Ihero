<template>
  <div class="col-md-12">
                <ul class="nav nav-tabs user-navbar" style="">
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderDashboard' ? 'nav-link active' : 'nav-link' " :href="'/vender'">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderProduct' ? 'nav-link active' : 'nav-link' " :href="'/vender/product'">Product</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderMenu' ? 'nav-link active' : 'nav-link' " :href="'/vender/menu'" style="color:grey;">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderStaff' ? 'nav-link active' : 'nav-link' " :href="'/vender/staff'" style="color:grey;">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderCategories' ? 'nav-link active' : 'nav-link' " :href="'/vender/categories'" style="color:grey;">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderAttribute' ? 'nav-link active' : 'nav-link' " :href="'/vender/attribute'" style="color:grey;">Attribute</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderOrder' ? 'nav-link active' : 'nav-link' " :href="'/vender/order'" style="color:grey;">Order</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderPayment' ? 'nav-link active' : 'nav-link' " :href="'/vender/payment'" style="color:grey;">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a :class="this.$router.currentRoute.name=='venderReport' ? 'nav-link active' : 'nav-link' " :href="'/vender/report'" style="color:grey;">Report</a>
                    </li>
                </ul>
            </div>
</template>