ALTER TABLE "mis_bill_det"
ADD "bdet_add_or_ded" smallint NOT NULL DEFAULT '1';
COMMENT ON COLUMN "mis_bill_det"."bdet_add_or_ded" IS '1=> Addition, 2 =>Deduction';