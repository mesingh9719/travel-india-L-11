$(document).ready(function() {
    $('.vehicle-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/vehicle",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'rc_number', name: 'rc_number' },
            {
                data: 'rc_image_front',
                name: 'rc_image_front',
                "render": function(data, type, full, meta) {
                    var img = baseUrl + '/';
                    return '<img src="' + img + data + '" width="50" class="rounded-2" />';
                },

            },
            // { data: 'verification', name: 'verification', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],

        responsive: true,
        pagingType: 'simple_numbers'
    });
});


function assign_driver(id) {
    var vehicleid = document.getElementById("vehicleid");
    vehicleid.value = id;
    if (id != "") {
        $("#selectDriveModal").modal("toggle");
    }

}

// Array of file input IDs and corresponding elements to show/hide
const fileInputIds = [
    { fileInputId: 'vehicle_image_1', targetId: 'vehicle_2' },
    { fileInputId: 'vehicle_image_2', targetId: 'vehicle_3' },
    { fileInputId: 'vehicle_image_3', targetId: 'vehicle_4' }
];

// Function to handle showing and hiding elements based on file input
function handleFileChange(event, targetId) {
    const files = event.target.files;
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
        targetElement.style.display = files.length > 0 ? 'block' : 'none';
    } else {
        console.error(`Element with ID ${targetId} not found.`);
    }
}

// Attach event listeners to each file input
fileInputIds.forEach(({ fileInputId, targetId }) => {
    const fileInput = document.getElementById(fileInputId);
    if (fileInput) {
        fileInput.addEventListener('change', function(event) {
            handleFileChange(event, targetId);
        });
    } else {
        console.error(`File input with ID ${fileInputId} not found.`);
    }
});