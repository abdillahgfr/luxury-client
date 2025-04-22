document.addEventListener("DOMContentLoaded", function() {
    var packageSelect = document.getElementById("paket");
    var personsInput = document.getElementById("persons");
    var totalCostInput = document.getElementById("total-cost");

    packageSelect.addEventListener("change", updateTotalCost);
    personsInput.addEventListener("input", updateTotalCost);

    function updateTotalCost() {
        var selectedPackage = packageSelect.value;
        var numberOfPersons = parseInt(personsInput.value) || 0; // Ensure it's a number

        var costPerPerson = 0;

        // Add package and cost options here
        if (selectedPackage === "Oman Package Tours") {
            costPerPerson = 1000; // Fixed cost for Private Group
        } else if (selectedPackage === "Program Full day City Tour Muscat") {
            costPerPerson = (numberOfPersons < 30) ? 120 : 100; // Adjust based on number of persons
        } else if (selectedPackage === "Program Half day Muscat City Tour") {
            costPerPerson = (numberOfPersons < 35) ? 55 : 50; // Adjust based on number of persons
        } else if (selectedPackage === "Ziarah Makam Nabi Ayyub AS, Salalah Oman") {
            costPerPerson = 450; // Fixed cost for this package
        }

        var total = costPerPerson * numberOfPersons;
        totalCostInput.value = total.toFixed(2); // Format to two decimal places
    }
});
