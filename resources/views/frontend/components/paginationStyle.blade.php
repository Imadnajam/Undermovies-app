<style>
    
    .form-container {
            max-width: 400px;
            margin: 50px auto;
           
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(24, 8, 8, 0.1);
        }

        .input-group {
            display: flex;
        }

        .input-group label {
            display: none;
        }

        .form-control {
            flex: 1;
            padding: 8px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            margin-right: -1px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-outline-primary {
            color: #ffffff;
            border-color: #9d00ff;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: hsl(249, 49%, 26%);
            border-color: hsl(249, 98%, 67%);
        }
        .pagination {
                color: white;
                display: flex;
                justify-content: center;
                list-style: none;
                padding: 0;
            }
        
            .pagination li {
                margin: 0 5px;
                display: inline-block;
            }
        
            .pagination a, .pagination span {
                padding: 8px 12px;
                border: 1px solid #ccc;
                text-decoration: none;
                color: #333;
                border-radius: 4px;
            }
        
            .pagination .active span {
                background-color: hsl(249, 98%, 67%);
                color: #fff;
            }
        
            .pagination a:hover {
                background-color: #f0f0f0;
            }
</style>