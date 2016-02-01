SDE Notes
=========

Steps to Enable SDE 9.1, 9.2, 9.3 Support in MS4W's MapServer
*************************************************************
       
1. Move the ogr_SDE.dll and gdal_SDE.dll plugin files up from 
   /ms4w/gdalplugins/ignored/sde-x/ into /ms4w/gdalplugins/
   
2. Execute the following at the commandline (after setting /ms4w/setenv.bat): 

   "ogrinfo --formats" 
        (should list the SDE driver)
   "gdalinfo --formats"
        (should list the SDE driver)
        
   **Note that you might need to add the ArcGIS location (such as 
    C:/Program Files/ArcGIS/Bin) to your PATH environment variable**

3. Create a MapServer LAYER for your SDE connection:
   
   Raster Layers
   -------------
   
     LAYER
       TYPE RASTER
       DATA "SDE:hostname,port,database,username,password,fully.specified.tablename,RASTER"
       ...
     END 
     
   Vector Layers
   -------------
   
   Modify your SDE layer in your mapfile to use the CONNECTIONTYPE PLUGIN
   parameter and point to the appropriate plugin using the PLUGIN parameter:
   
   Example#1: SDE 9.1 layer
   
     LAYER
       ...
       CONNECTIONTYPE PLUGIN
       CONNECTION "hostname,port:xxx,database,username,password"
       PLUGIN "C:/ms4w/Apache/specialplugins/msplugin_sde_91.dll"  
       DATA "layername,geometrycolumn,SDE.DEFAULT"
       ...
     END # layer
   
   Example#2: SDE 9.2 layer
   
     LAYER
       ...
       CONNECTIONTYPE PLUGIN
       CONNECTION "hostname,port:xxx,database,username,password"
       PLUGIN "C:/ms4w/Apache/specialplugins/msplugin_sde_92.dll"  
       DATA "layername,geometrycolumn,SDE.DEFAULT"
       ...
     END # layer  

   See the ArcSDE section of MapServer's Vector Data Access doc for help with
   the CONNECTION and DATA parameters: http://www.mapserver.org/input/vector/arcsde.html



