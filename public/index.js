
const denominations = [
    {id: "one_rupee", value: 1, mulId: "one_rupee_mul"},
    {id: "two_rupee", value: 2, mulId: "two_rupee_mul"},
    {id: "five_rupee", value: 5, mulId: "five_rupee_mul"},
    {id: "ten_rupee", value: 10, mulId: "ten_rupee_mul"},
    {id: "twenty_rupee", value: 20, mulId: "twenty_rupee_mul"},
    {id: "fifty_rupee", value: 50, mulId: "fifty_rupee_mul"},
    {id: "hundread_rupee", value: 100, mulId: "hundread_rupee_mul"},
    {id: "two_hundread_rupee", value: 200, mulId: "two_hundread_rupee_mul"},
    {id: "five_hundread_rupee", value: 500, mulId: "five_hundread_rupee_mul"},
    {id: "thousand_rupee", value: 1000, mulId: "thousand_rupee_mul"},
    {id: "two_thousand_rupee", value: 2000, mulId: "two_thousand_rupee_mul"},
];

function updateTotal() {
    let sum = 0;
    denominations.forEach(den => {
        const val = Number(document.getElementById(den.mulId).value) || 0;
        sum += val;
    });
    document.getElementById("total").value = sum;
}

denominations.forEach(den => {
    document.getElementById(den.id).addEventListener("input", function() {
        const count = Number(this.value) || 0;
        document.getElementById(den.mulId).value = count * den.value;
        updateTotal();
    });
});

function createProduct()
{
     window.location.href = "/productform";
}