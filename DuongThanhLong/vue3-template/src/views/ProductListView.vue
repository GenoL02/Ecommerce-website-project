<template>
<StoreHeader />
<div class="main-content">
    <SetSideBar />
    <main>
        <div class="container">
            <div class="content">
                <div class="content-header">
                    <h4>Tất Cả Sản Phẩm</h4>
                </div>
                <div class="table-filter">
                    <div class="table-filters">
                        <div class="table-filters-left">
                            <div class="input">
                                <img src="@/assets/filter.png">
                                <input type="text" id="myInput" v-model="productNameFilter" placeholder="Tên Sản Phẩm" title="Tên Sản Phẩm">
                            </div>
                            <select id="filter" v-model="productStatusFilter">
                                <option selected value="none">Tình Trạng</option>
                                <option>Bình thường</option>
                                <option>Vi phạm</option>
                            </select>
                            <select id="filter1" v-model="productStateFilter">
                                <option selected value="none">Trạng thái</option>
                                <option value="true">Đang hoạt động</option>
                                <option value="false">Không hoạt động</option>
                            </select>
                        </div>
                        <div class="table-filters-right">
                            <button type="button" id="add-product">
                                <router-link to="/add-product" title="Thêm sản phẩm">Thêm Sản Phẩm</router-link>
                            </button>
                        </div>

                    </div>

                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 215px">Tên Sản Phẩm</th>
                                <th>Giá Bán</th>
                                <th>Số Lượng Hiện Có </th>
                                <th>Tình Trạng</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(product, index) in filteredProducts" :key="product.id">
                                <td>{{ product.id }}</td>
                                <td>{{ product.name }}</td>
                                <td>{{ product.price }}</td>
                                <td>{{ product.quantity }}</td>
                                <td>{{ product.status }}</td>
                                <td>
                                    <input type="checkbox" :id="'option' + index" v-model="product.checked" />
                                    <label :for="'option' + index" class="toggle">
                                        <div class="slider"></div>
                                    </label>
                                </td>
                                <td id="act">
                                    <a href="#" title="edit" v-if="product.actions.edit"><img src="@/assets/edit.png" /></a>
                                    <a href="#" title="delete" class="delete" v-if="product.actions.delete" @click="openModal(product, index)">
                                        <img src="@/assets/delete.png" />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&#60;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&#62;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <Modal v-if="showModal" :product="selectedProduct" :index="selectedIndex" @delete="deleteRow" @close="showModal = false" />
                </div>
            </div>
        </div>
    </main>
</div>
<SetFooter2 />
</template>

<script>
import StoreHeader from "@/components/widgets/StoreHeader.vue";
import SetSideBar from "@/components/widgets/SetSideBar.vue";
import SetFooter2 from "@/components/widgets/SetFooter2.vue";
import Modal from "@/components/MyPopup.vue";
export default {
    name: 'ProductListView',
    components: {
        StoreHeader,
        SetSideBar,
        SetFooter2,
        Modal
    },
    data() {
        return {
            products: [{
                    id: 100000,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Vi phạm",
                    checked: false,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100001,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100002,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100003,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100004,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100005,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100006,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
                {
                    id: 100007,
                    name: "Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, ...",
                    price: 19290000,
                    quantity: 1000,
                    status: "Bình thường",
                    checked: true,
                    actions: {
                        edit: true,
                        delete: true
                    }
                },
            ],
            productNameFilter: '',
            productStatusFilter: 'none',
            productStateFilter: 'none',
            showModal: false,
            selectedProduct: null,
            selectedIndex: null,
        }
    },
    computed: {
        filteredProducts() {
            let filtered = this.products.filter(product => {
                let nameMatch = product.name.toLowerCase().includes(this.productNameFilter.toLowerCase());
                let statusMatch = this.productStatusFilter === 'none' || product.status === this.productStatusFilter;
                let stateMatch = ['true', 'false'].includes(this.productStateFilter) ? product.checked.toString() === this.productStateFilter : true;
                return nameMatch && statusMatch && stateMatch;
            });

            return filtered;
        },
    },
    methods: {
        openModal(product, index) {
            this.selectedProduct = product;
            this.selectedIndex = index;
            this.showModal = true;
        },
        deleteRow(index) {
            this.products.splice(index, 1);
        },
    },
};
</script>

<style scoped>
main {
    background-color: rgb(0, 0, 0, .05);
}

.main-content {
    display: flex;
}

.container .content {
    flex-grow: 1;
    width: 90%;
    margin: 25px auto;
    height: 940px;
    display: flex;
    flex-direction: column;
    background-color: white;
}

.content .content-header {
    width: 100%;
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 40px;
}

.content .content-header h4 {
    width: 220px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.table-filters {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-bottom: 2em;
}

.table-filters a {
    color: #222;
    font-size: 16px;
    font-weight: 500;
    margin-right: 1em;
    display: inline-block;
}

.table-filters a:hover {
    text-decoration: none;
}

.table-filters select {
    background: #fff;
    font-size: 16px;
    font-weight: 500;
    width: 9em;
    height: 2.5em;
    border-radius: 0.25em;
}

.table-filters-left {
    width: 70%;
    margin-left: 10px;
    display: flex;
    justify-content: space-between;
}

.table-filters-right {
    width: 30%;
}

table {
    border-collapse: collapse;
    width: 98%;
    border: 1px solid #ddd;
    font-size: 18px;
    background: #fff;
    border-radius: 6px;
    margin: 0 auto;
}

thead {
    border-width: 1px, 0px, 1px, 0px;
    border-style: solid;
    border-color: #00000033;
}

th {
    font-size: 16px;
    font-weight: 400;
    line-height: 19.36px;
    text-align: left;
    padding: 0.5em 1em !important;
    border-bottom: 1px solid #ddd;
}

tbody td {
    padding: 0em 1em;
    /* text */

    width: 100px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
}

tbody tr.show {
    display: table-row;
}

tbody tr.hidden {
    display: none;
}

tbody tr.bg-grey,
tbody tr:nth-child(odd) {
    background: #f1f1f1;
}

tbody tr:last-child td {
    border-bottom: none;
}

/* Media queries */
@media (min-width: 520px) {
    body {
        padding: 3em;
    }
}

.toggle {
    background-color: grey;
    width: 45px;
    height: 22px;
    border-radius: 11px;
    display: flex;
    flex-direction: column;
}

.toggle-active {
    background-color: blue;
    width: 45px;
    height: 22px;
    border-radius: 11px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

td input {
    display: none;
}

.slider {
    height: 24px;
    width: 24px;
    background-color: white;
    border-radius: 12px;
    margin: 4px;
}

input:checked+.toggle {
    background-color: green;
}

input:checked+.toggle>.slider {
    align-self: flex-end;
}

tr td#act {
    display: flex;
    justify-content: space-evenly;
}

tr td#act img {
    width: 20px;
    height: 20px;
    margin-top: 1em;
}

.input {
    width: 40%;
    height: 40px;
}

.input img {
    width: 40px;
    height: 40px;
    border: 1px solid black;
    padding: 10px 10px 10px 10px;
    border-right: none;
}

#myInput {
    background-position: 10px 10px;
    position: absolute;
    background-repeat: no-repeat;
    font-size: 16px;
    width: 14%;
    height: 40px;
    padding: 12px 0px 10px 10px;
    border: 1px solid black;
    border-radius: 0px 4px 4px 0px;
    margin-bottom: 12px;
}

.table-filters a {
    color: white !important;
    text-decoration: none;
    margin-right: 0px;
}

button#add-product {
    margin-left: 77px;
    box-sizing: border-box;
    width: 150px;
    color: white;
    height: 40px;
    background: #007006;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
}

.pagination {
    padding-left: 40% !important;
    margin-top: 30px;
}

.page-link {
    color: #007006 !important;
}
</style>
