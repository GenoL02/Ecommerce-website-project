<template>
<footer>
    <p>
        &copy; 2024 Shoop. Tất cả các quyền được bảo lưu.
    </p>
</footer>
</template>

<script>
export default {
    name: 'SetFooter2',
};
</script>

<style scoped>
footer p {
    text-align: center;
    color: rgba(0, 0, 0, .5);
    font-size: 14px;
    margin-top: 10px;
}

footer {
    display: flex;
    align-self: stretch;
    background-color: #fff;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 27px 20px 27px;
    text-align: left;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    font-family: Inter;
}
</style>
