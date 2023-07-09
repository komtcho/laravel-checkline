<script>
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (let x = 0; x < checkboxes.length; x++) checkboxes[x].addEventListener("change", function(e) {
        let t = this.parentNode,
            c = t.querySelectorAll('input[type="checkbox"]');
        for (let n = 0; n < c.length; n++) c[n].checked = this.checked, c[n].indeterminate = !1;
        for (;
            ["ul", "li"].indexOf(t.nodeName.toLowerCase()) >= 0;) {
            let h = t.querySelector(':scope > input[type="checkbox"]');
            if (h && h != this) {
                h.checked = this.checked;
                let l = h.parentNode.querySelectorAll('input[type="checkbox"]'),
                    o = l.length,
                    i = 0;
                for (let r = 0; r < l.length; r++) i += l[r].checked;
                o === i ? (h.indeterminate = !1, h.checked = !0) : 0 === i ? (h.indeterminate = !1, h
                    .checked = !1) : (h.indeterminate = !0, h.checked = !1)
            }
            t = t.parentNode
        }
    });
</script>
