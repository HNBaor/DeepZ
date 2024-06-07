// Gọi API để lấy danh sách tỉnh/thành phố
axios.get('/api/cities')
    .then((response) => {
        renderData(response.data, "provinces");
    })
    .catch((error) => {
        console.error("Error fetching cities:", error);
    });

// Function để gọi API và render data
const callAPI = (url, select) => {
    return axios.get(url)
        .then((response) => {
            renderData(response.data, select);
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

// Sự kiện khi chọn tỉnh/thành phố
$("#provinces").change(() => {
    const cityId = $("#provinces").val();
    if (cityId !== "") {
        const url = `/api/districts/${cityId}`;
        callAPI(url, "districts");
    } else {
        $("#districts").empty();
        $("#districts").append('<option value="">Quận/huyện</option>');
    }
});

// Sự kiện khi chọn quận/huyện
$("#districts").change(() => {
    const districtId = $("#districts").val();
    if (districtId !== "") {
        const url = `/api/wards/${districtId}`;
        callAPI(url, "wards");
    } else {
        $("#wards").empty();
        $("#wards").append('<option value="">Phường/xa</option>');
    }
});
