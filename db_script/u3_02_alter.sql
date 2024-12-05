ALTER TABLE "mis_vhl_srv_det"
ADD "sdt_unit" character varying(20) NULL,
ADD "sdt_price" numeric(9,3) NULL,
ADD "sdt_billid" bigint NULL;
COMMENT ON TABLE "mis_vhl_srv_det" IS '';

ALTER TABLE "mis_vhl_service"
ADD "srv_labour" numeric(9,3) NULL;
COMMENT ON TABLE "mis_vhl_service" IS '';
