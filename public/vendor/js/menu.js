function dropdown() {
  return {
    open: false,
    show() {
      if (this.open) {
        this.open = false
        document.getElementsByTagName('html')[0].style.overflow = "auto"
      } else {
        this.open = true
      }
    }, close() {
      this.open = false
    }
  }
}
