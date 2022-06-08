<template>
    <Head>
        <title>Dashboard - Aplikasi Kasir</title>
    </Head>

    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-8">
                        <div
                            v-if="hasAnyPermission(['dashboard.sales_chart'])"
                            class="card border-0 rounded-3 shadow border-top-purple"
                        >
                            <div class="card-header">
                                <span class="font-weight-bold"
                                    ><i class="fa fa-chart-bar"></i> SALES CHART
                                    7 DAYS</span
                                >
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div
                            v-if="hasAnyPermission(['dashboard.sales_today'])"
                            class="card border-0 rounded-3 shadow border-top-info mb-4"
                        >
                            <div class="card-header">
                                <span class="font-weight-bold"
                                    ><i class="fa fa-chart-line"></i> SALES
                                    TODAY</span
                                >
                            </div>
                            <div class="card-body">
                                <strong>0</strong> SALES
                                <hr />
                                <h5 class="fw-bold">Rp. 0</h5>
                            </div>
                        </div>

                        <div
                            v-if="hasAnyPermission(['dashboard.profits_today'])"
                            class="card border-0 rounded-3 shadow border-top-success"
                        >
                            <div class="card-header">
                                <span class="font-weight-bold"
                                    ><i class="fa fa-chart-bar"></i> PROFITS
                                    TODAY</span
                                >
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Rp. 0</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div
                            v-if="
                                hasAnyPermission([
                                    'dashboard.best_selling_product',
                                ])
                            "
                            class="card border-0 rounded-3 shadow border-top-warning"
                        >
                            <div class="card-header">
                                <span class="font-weight-bold"
                                    ><i class="fa fa-chart-pie"></i> BEST
                                    SELIING PRODUCT</span
                                >
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            v-if="hasAnyPermission(['dashboard.product_stock'])"
                            class="card border-0 rounded-3 shadow border-top-danger"
                        >
                            <div class="card-header">
                                <span class="font-weight-bold"
                                    ><i class="fa fa-box-open"></i> PRODUCT
                                    STOCK</span
                                >
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
//import layout
import LayoutApp from "../../../Layouts/App.vue";

//import Heade and useForm from Inertia
import { Head } from "@inertiajs/inertia-vue3";

export default {
    //layout
    layout: LayoutApp,

    //register component
    components: {
        Head,
    },
};
</script>

<style></style>
