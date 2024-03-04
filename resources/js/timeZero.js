
const timeZero = {
    init() {
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('appointment_time').addEventListener('change', function() {
                const timeValue = this.value.split(':');
                const hours = timeValue[0];
                this.value = hours + ':00';
            });
        });
    }
};

export default timeZero;
