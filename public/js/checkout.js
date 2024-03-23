function redirectToCart() {
    
    window.location.href = 'http://127.0.0.1:8000/cartpage'; 
        }

        function redirectToshop() {
    
    window.location.href = 'http://127.0.0.1:8000/'; 
        }





new Vue({
    el: "#app",
    data() {
      return {
        currentCardBackground: Math.floor(Math.random()* 25 + 1), 
        cardName: "",
        cardNumber: "",
        cardMonth: "",
        cardYear: "",
        cardCvv: "",
        minCardYear: new Date().getFullYear(),
        amexCardMask: "#### ###### #####",
        otherCardMask: "#### #### #### ####",
        cardNumberTemp: "",
        isCardFlipped: false,
        focusElementStyle: null,
        isInputFocused: false
      };
    },
    mounted() {
      this.cardNumberTemp = this.otherCardMask;
      document.getElementById("cardNumber").focus();
    },
    computed: {
      getCardType () {
        let number = this.cardNumber;
        let re = new RegExp("^4");
        if (number.match(re) != null) return "visa";
  
        re = new RegExp("^(34|37)");
        if (number.match(re) != null) return "amex";
  
        re = new RegExp("^5[1-5]");
        if (number.match(re) != null) return "mastercard";
  
        re = new RegExp("^6011");
        if (number.match(re) != null) return "discover";
        
        re = new RegExp('^9792')
        if (number.match(re) != null) return 'troy'
  
        return "visa"; 
      },
          generateCardNumberMask () {
              return this.getCardType === "amex" ? this.amexCardMask : this.otherCardMask;
      },
      minCardMonth () {
        if (this.cardYear === this.minCardYear) return new Date().getMonth() + 1;
        return 1;
      }
    },
    watch: {
      cardYear () {
        if (this.cardMonth < this.minCardMonth) {
          this.cardMonth = "";
        }
      }
    },
    methods: {
      flipCard (status) {
        this.isCardFlipped = status;
      },
      focusInput (e) {
        this.isInputFocused = true;
        let targetRef = e.target.dataset.ref;
        let target = this.$refs[targetRef];
        this.focusElementStyle = {
          width: `${target.offsetWidth}px`,
          height: `${target.offsetHeight}px`,
          transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`
        }
      },
      blurInput() {
        let vm = this;
        setTimeout(() => {
          if (!vm.isInputFocused) {
            vm.focusElementStyle = null;
          }
        }, 300);
        vm.isInputFocused = false;
      }
    }
  });
  



  document.addEventListener("DOMContentLoaded", function() {
      // Get elements for saved card and new card options
      var savedCardOption = document.querySelector(".opt");
      var newCardOption = document.querySelector(".opt1");
      // Get elements for saved card details and new card form
      var savedCardDetails = document.querySelector(".card");
      var newCardForm = document.querySelector("form");

      // Hide the new card form initially
      newCardForm.style.display = "none";

      // Add click event listener to the new card option
      newCardOption.addEventListener("click", function() {
          // Show the new card form
          newCardForm.style.display = "block";
          // Hide the saved card details
          savedCardDetails.style.display = "none";
      });

      // Add click event listener to the saved card option
      savedCardOption.addEventListener("click", function() {
          // Hide the new card form
          newCardForm.style.display = "none";
          // Show the saved card details
          savedCardDetails.style.display = "block";
      });
  });

