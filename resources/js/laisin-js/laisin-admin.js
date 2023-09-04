const d = new Date()
$("#yearpicker").yearpicker({
    startYear: 1970,
    endYear: d.getFullYear(),
    top: 0
})