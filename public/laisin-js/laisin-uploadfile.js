$('.drag-and-drop').on('dragenter', function(e) {
    $('.drag-and-drop').addClass('dragenter')
})

$('.drag-and-drop').on('drop', function(e) {
    e.stopPropagation();
    e.preventDefault();

    let file = e.originalEvent.dataTransfer.files;
    const files = new File([file[0]], 'img', {
        type: file[0].type,
        lastModified: new Date()
    });

    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(files)
    $('#input-file').files = dataTransfer.files;
    const fileInput = document.querySelector('#input-file')
    fileInput.files = dataTransfer.files
    let src = URL.createObjectURL(file[0])
    const preview = document.getElementById('preview-img')
    $('.preview').removeClass('no-img')
    $('.drag-icons').addClass('no-img')
    preview.src = src
})

$('#input-file').on('change', function(e) {
    let src = URL.createObjectURL(e.currentTarget.files[0])
    const preview = document.getElementById('preview-img')
    $('.preview').removeClass('no-img')
    $('.drag-icons').addClass('no-img')
    preview.src = src
})