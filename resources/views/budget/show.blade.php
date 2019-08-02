<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wealth | Budget</title>
    <link rel="stylesheet" href="{{asset('budget-asset/css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <page size="A4" id="app">
        <div class="title">
            <img src="{{asset('budget-asset/images/header.jpg')}}" style="width: 100%" srcset="">
        </div>
        <div class="content">
            <div class="header">
                <p>Budget planning is essential for the household that is serious about their financial future, savings,
                    buying a car
                    or family home, putting kids through school and many other financial decisions. Use the budget
                    planner to track
                    your household expenses and payments.
                </p>
            </div>
            <div>
                <table style="width:100%">
                    <template v-for="(value, key) in budget" :key="index">
                        <tr v-if="value === 'header'">
                            <th v-text="key"></th>
                            <th></th>
                        </tr>
                        <tr v-else-if="value === 'space'">
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr v-else>
                            <td v-text="key"></td>
                            <td>
                                <input type="number" readonly :name="key" v-model="computedBudget[key]"
                                    v-if="value === 'computed'">
                                <input v-else type="number" :name="key" v-model="budget[key]" @keyup="save(key)">
                            </td>
                        </tr>
                    </template>
                </table>
            </div>
        </div>
    </page>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.8/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script>
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        let token = document.head.querySelector('meta[name="csrf-token"]');
        if (token) {
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        } else {
            console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
        }

        const app = new Vue({
            el: "#app",
            data: {
                budget: {
                    "Income": "header",
                    "Net Salary": 0,
                    "TOTAL INCOME": "computed",

                    "space101": "space",
                    "Additional Income": "header",
                    "Partner’s net income": "header",
                    "Rental income": 0,
                    "Other income (i.e. business/side hustle)": 0,
                    "TOTAL ADDITIONAL INCOME (B)": "computed",
                    "TOTAL HOUSEHOLD INCOME (A+B=C)": "computed",

                    "space102": "space",
                    "Expenses": "header",
                    "Fixed expenses Rent/home loan": "header",
                    "Standing orders": 0,
                    "Car loan repayments": 0,
                    "Other Loan repayments (i.e. Personal loan/SACCO)": 0,
                    "Insurance (IPF)": 0,
                    "Savings (___%)": 0,
                    "School fees": 0,
                    "Maintenance costs": 0,
                    "Other Fixed Expense _______": 0,
                    "TOTAL FIXED EXPENSES (D)": "computed",

                    "space103": "space",
                    "Variable expenses": "header",
                    "Electricity": 0,
                    "Water": 0,
                    "Rates and taxes": 0,
                    "Transport": 0,
                    "Entertainment": 0,
                    "Clothing": 0,
                    "Cell phone": 0,
                    "Miscellaneous Pension": 0,
                    "Other Variable Expenses ___": 0,
                    "TOTAL VARIABLE EXPENSES (E)": "computed",

                    "space104": "space",
                    "Irregular expenses": "header",
                    "Medical emergency": 0,
                    "Household repairs": 0,
                    "Car emergency": 0,
                    "Gifts": 0,
                    "Pet emergency Other _____________": 0,
                    "Other Irregular Expenses ________": 0,
                    "TOTAL IRREGULAR EXPENSES (F)": "computed",
                    "TOTAL EXPENSES (D+E+F=G)": "computed",

                    ...{!! json_encode($budget-> details)!!}
                },
                computedBudget: {},
            },

            mounted() {
                this.recalculate()
            },

            methods: {

                recalculate() {
                    console.log(this.computedBudget)
                    this.computedBudget = {
                        "TOTAL INCOME": +this.budget["Net Salary"],

                        "TOTAL ADDITIONAL INCOME (B)": +this.budget["Rental income"] + +this.budget["Other income (i.e. business/side hustle)"],

                        "TOTAL FIXED EXPENSES (D)": +this.budget["Standing orders"] + +this.budget["Car loan repayments"] + +this.budget["Other Loan repayments (i.e. Personal loan/SACCO)"]
                            + +this.budget["Insurance (IPF)"] + +this.budget["Savings (___%)"] + +this.budget["School fees"] + +this.budget["Maintenance costs"] + +this.budget["Other Fixed Expense _______"],

                        "TOTAL VARIABLE EXPENSES (E)": +this.budget["Electricity"] + +this.budget["Water"] + +this.budget["Rates and taxes"] + +this.budget["Miscellaneous Pension"]
                            + +this.budget["Transport"] + +this.budget["Entertainment"] + +this.budget["Clothing"] + +this.budget["Cell phone"] + +this.budget["Other Variable Expenses ___"],

                        "TOTAL IRREGULAR EXPENSES (F)": +this.budget["Medical emergency"] + +this.budget["Household repairs"] + +this.budget["Car emergency"] 
                            + +this.budget["Gifts"] + +this.budget["Pet emergency Other _____________"] + +this.budget["Other Irregular Expenses ________"],
                    }
                    this.computedBudget["TOTAL HOUSEHOLD INCOME (A+B=C)"] = this.computedBudget["TOTAL INCOME"] + this.computedBudget["TOTAL ADDITIONAL INCOME (B)"]

                    this.computedBudget["TOTAL EXPENSES (D+E+F=G)"] = this.computedBudget["TOTAL FIXED EXPENSES (D)"] + this.computedBudget["TOTAL VARIABLE EXPENSES (E)"] +  + this.computedBudget["TOTAL IRREGULAR EXPENSES (F)"]
                },

                save(key) {
                    axios.patch('/budget', {key, value: this.budget[key]})
                        .then(({data}) => {
                            console.log(data);
                        })
                        .catch(e => {
                            console.log(e);
                            alert("Budget info cannot be saved due to network. Please refresh the page");
                        })
                    this.recalculate();
                }

            },

        })
    </script>
</body>

</html>