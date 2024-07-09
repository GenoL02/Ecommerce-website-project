<template>
<div id="modal" class="modal" v-show="isVisible">
    <div class="modal-content">
        <span class="close" @click="hideModal">&times;</span>
        <p>Bạn có chắc chắn muốn lưu trữ thông tin này không?</p>
        <div class="confirm">
            <button type="button" id="no" @click="hideModal">Không</button>
            <button type="button" id="yes" @click="emitDelete">Có</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'MyPopup',
    data() {
        return {
            isVisible: false,
        };
    },
    props: ['product', 'index'],
    methods: {
        hideModal() {
            this.isVisible = false;
            this.$emit('close')
        },
        emitDelete() {
            this.$emit('delete', this.index);
            this.$emit('close');
        }
    }
};
</script>

<style scoped>
.modal {
    position: fixed;
    /* Vị trí cố định */
    z-index: 1;
    /* Đặt mức độ ưu tiên cao hơn các phần tử khác */
    left: 0;
    top: 0;
    width: 100%;
    /* Chiếm toàn bộ chiều rộng màn hình */
    height: 100%;
    /* Chiếm toàn bộ chiều cao màn hình */
    background-color: rgba(0, 0, 0, 0.4);
    /* Tạo hiệu ứng mờ */
    display: block !important;
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    /* Vị trí bảng thông báo */
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    /* Chiều rộng bảng thông báo */
    height: 250px;
}

.modal-content p {
    margin: 30px auto;
    width: 398px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
}

.modal-content .confirm {
    display: flex;
    justify-content: space-between;
    width: 65%;
    margin: 10px auto;
}

.modal-content button {
    width: 120px;
    height: 40px;
    margin: 0 auto;
}

.modal-content button#no {
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 4px;
    flex: none;
    order: 0;
    flex-grow: 0;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: rgba(0, 0, 0, 0.5);
}

.modal-content button#yes {
    background: #D0011B;
    border: 1px solid #D0011B;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.btn-close {
    background-color: #4CAF50;
    /* Màu nền nút đóng */
    color: white;
    padding: 10px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-close:hover {
    background-color: #45a049;
}
</style>
