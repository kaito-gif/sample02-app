<div>
     <div id="alert" {{ $attributes }}>
        {{ $slot }}
     </div>
     <style>
        #alert {
            width: 100%;
            padding: 5px;
            bottom: none;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }
        #alert.danger {
            background-color: #fff2f2;
            color: red;
        }
        #alert.info {
            background-color: #fff2f2;
            color: blue;
        }
     </style>
</div>