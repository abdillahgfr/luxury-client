  document.addEventListener("DOMContentLoaded", function() {
        var packageSelect = document.getElementById("package");
        var personsInput = document.getElementById("persons");
        var totalCost = document.getElementById("total-cost");
    
        packageSelect.addEventListener("change", updateTotalCost);
        personsInput.addEventListener("input", updateTotalCost);
    
        function updateTotalCost() {
            var selectedPackage = packageSelect.value;
            var numberOfPersons = parseInt(personsInput.value);
    
            var costPerPerson = 0;
    
            // Add package and cost options here
            if (selectedPackage === "Private Group") {
                costPerPerson = 25;
            } else if (selectedPackage === "Program Full day City Tour Muscat") {
                costPerPerson = 100;
            } else if (selectedPackage === "Program Half day Muscat City Tour") {
                costPerPerson = 40;
            }
    
            var total = costPerPerson * numberOfPersons;
            totalCost.textContent = "$" + total.toFixed(2);
        }
    });